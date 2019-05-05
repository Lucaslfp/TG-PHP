<?php

include_once './banco.php';

if (isset($_POST)) {
    $dados = [
        "cpf" => addslashes($_POST['cpf']),
        "nome" => addslashes($_POST['nome']),
        "senha" => addslashes($_POST['senha']),
        "nivel" => addslashes($_POST['nivel'])
    ];

    $cadastro = $pdo->prepare("INSERT INTO usuario (CPF, senha, Nome, data_nascimento, Cidade, Bairro, Rua, Num_Casa, Complemento, CEP, tipo_usuario, resposta, museu_id_museu)
                               VALUES (:cpf, :senha, :nome, '20-03-1198', 'cidade', 'bairro', '45', 100, 'complemento', 'cep', :nivel, 'resposta', 12)");
    $cadastro->bindValue(":cpf", $dados['cpf']);
    $cadastro->bindValue(":nome", $dados['nome']);
    $cadastro->bindValue(':senha', $dados['senha']);
    $cadastro->bindValue(':nivel', $dados['nivel']);

    $cadastro->execute();

    // $count_cad = $cadastro->fetchAll(PDO::FETCH_ASSOC);

    // if (count($count_cad) > 0) {
        header("Location: ./../home.php");
    // }   

    // else {
    //     echo "<script>alert('Falha no cadastro'); window.location = history.go(-1);</script>";
    // }
}