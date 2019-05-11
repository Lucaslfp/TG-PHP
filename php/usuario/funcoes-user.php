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

            if ($cadastro->execute()) {
                $_SESSION['logado'] = 'logado';
                $_SESSION['nome'] = $dados['nome'];
                header("Location: ./../../home.php");
            }

            else {
                echo "<script>alert('Falha no cadastro'); window.location = history.go(-1);</script>";
            }
            // print_r($o);

        }

        else {
            echo "<script>alert('As senhas estão diferentes'); window.location = history.go(-1);</script>";
        }
    }
    
    else if ($parametro == 'login') {
        $dados = [
            "email" => addslashes($_POST['usuario']),
            "senha" => addslashes($_POST['senha'])
        ];

        if ($dados['email'] != "") {
            $buscar = $pdo->prepare("SELECT * FROM usuario WHERE :email = CPF and :senha = senha ");
            $buscar->bindValue(":email", $dados['email']);
            $buscar->bindValue(":senha", $dados['senha']);
            $buscar->execute();

            $users = $buscar->fetchAll(PDO::FETCH_ASSOC);

            if (count($users) > 0) {
                header("Location: ./../home.php");
                $_SESSION['logado'] = 'logado';
                $_SESSION['nome'] = $users[0]['Nome'];
            } else {
                echo "<script>alert('Não localizamos o usuário'); window.location = history.go(-1);</script>";
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

    } 
    
    else {
        echo "Não recebemos um parametro válido.";
    }
}

if ($parametro == 'logout') {
    session_destroy();
    header('Location: ./../../login.php');
}