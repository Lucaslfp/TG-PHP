<?php

include_once './../common.php';
include_once './banco.php';

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
    }
    else 
        echo "<script>alert('Não localizamos o usuário'); window.location = history.go(-1);</script>";
}
else {
    echo "<script>alert('Não encontramos o seu cadastro'); window.location = history.go(-1);</script>";
}