<?php

include_once './../../common.php';
include_once './../banco.php';

$parametro = !empty($_GET['param']) ? $_GET['param'] : '';

if (!empty($_POST)) {
    if ($parametro == 'cadastrar') {
        $dados = [
            "cpf" => addslashes($_POST['cpf']),
            "nome" => addslashes($_POST['nome']),
            "senha" => addslashes($_POST['senha']),
            "email" => addslashes($_POST['email']),
            "data" => addslashes($_POST['data']),
            "confirmar" => addslashes($_POST['confirma-senha']),
            "pergunta" => addslashes($_POST['pergunta']),
            "resposta" => addslashes($_POST['resposta']),
            "nivel" => addslashes($_POST['nivel'])
        ];

        $l = $pdo->prepare('SELECT * FROM usuario WHERE email = ? OR cpf = ?');
        $l->bindValue(1, $dados['email']);
        $l->bindValue(2, $dados['cpf']);
        $l->execute();

        if ($l->rowCount() > 0)
            echo "<script>alert('E-mail e/ou CPF já cadastrados'); window.location = history.go(-1);</script>";

        $permissao = $dados['nivel'] == 'Administrador' ? 1 : 2;

        if (($dados['senha'] == $dados['confirmar'])) {
            $cadastro = $pdo->prepare(
                "INSERT INTO usuario (cpf, senha, nome, email, data_nascimento, cidade, bairro, rua, numero, complemento, cep, pergunta, resposta, tipo, id_permissao)
                VALUES (:cpf, :senha, :nome, :email, :data_n, 'cidade', 'bairro', '45', 100, 'complemento', 'cep', :pergunta, :resposta, :nivel, :permissao)");
            $cadastro->bindValue(":cpf", $dados['cpf']);
            $cadastro->bindValue(":senha", $dados['senha']);
            $cadastro->bindValue(':nome', $dados['nome']);
            $cadastro->bindValue(':email', $dados['email']);
            $cadastro->bindValue(':data_n', $dados['data']);
            $cadastro->bindValue(':pergunta', $dados['pergunta']);
            $cadastro->bindValue(':resposta', $dados['resposta']);
            $cadastro->bindValue(':nivel', $dados['nivel']);
            $cadastro->bindValue(':permissao', $permissao);
            $cadastro->execute();

            if ($cadastro->rowCount() > 0) {
                $_SESSION['logado'] = 'logado';
                $nome = explode(" ", $dados['nome']);
                $_SESSION['nome'] = $nome[0];
                header("Location: ./../../home.php");
            }

            else {
                echo "<script>alert('Falha no cadastro'); window.location = history.go(-1);</script>";
            }
        }

        else {
            echo "<script>alert('As senhas estão diferentes'); window.location = history.go(-1);</script>";
        }
    }
    
    else if ($parametro == 'login') {
        $dados = [
            "cpf" => addslashes($_POST['cpf']),
            "senha" => addslashes($_POST['senha'])

        ];
        if ($dados['cpf'] != "") {
            $buscar = $pdo->prepare("SELECT * FROM usuario WHERE cpf = :cpf and senha = :senha ");
            $buscar->bindValue(":cpf", $dados['cpf']);
            $buscar->bindValue(":senha", $dados['senha']);
            $buscar->execute();

            if ($buscar->rowCount() > 0) {
                $users = $buscar->fetch(PDO::FETCH_ASSOC);

                $nome = explode(" ", $users['nome']);
                $_SESSION['nome'] = $nome[0];
                $_SESSION['logado'] = 'logado';

                header("Location: ./../../home.php");
            } else {
                echo "<script>alert('Usuário ou senha incorretos'); window.location = history.go(-1);</script>";
            }

        } else {
            echo "<script>alert('Não encontramos o seu cadastro'); window.location = history.go(-1);</script>";
        }
    }

    else if ($parametro == 'editar') { 

    }

    else if ($parametro == 'excluir') {

    }

    else if ($parametro == 'recuperar') { 
        $resposta = addslashes($_POST['resposta']);
        $email = addslashes($_POST['email']);

        $l = $pdo->prepare('SELECT * FROM usuario WHERE email = ?');
        $l->bindValue(1, $email);
        $l->execute();

        if ($l->rowCount() > 0) {
            $info = $l->fetch();
            if ($info['resposta'] == $resposta) {
                $_SESSION['autorizado'] = 'true';
                $_SESSION['email'] = $email;
                header('Location: ./../../recuperar.php');
            }
            else {
                echo "<script>alert('Resposta Incorreta. A pergunta é: ".$info['pergunta']."'); window.location = history.go(-1);</script>";
            }
        }
    }

    else if ($parametro == 'nova-senha') {
        $senha = addslashes($_POST['senha']);
        $email = $_SESSION['email'];

        $l = $pdo->prepare("UPDATE usuario SET senha = ? WHERE email = ?");
        $l->bindValue(1, $senha);
        $l->bindValue(2, $email);
        $l->execute();

        if ($l->execute())
            echo "<script>alert('Senha alterada com sucesso.'); window.location.href = './../../login.php';</script>";
        else 
            echo "<script>alert('Tente Novamente'); window.location = history.go(-1);</script>";
    }
    
    else {
        echo "Não recebemos um parametro válido.";
    }
}

if ($parametro == 'logout') {
    session_destroy();
    header('Location: ./../../login.php');
}