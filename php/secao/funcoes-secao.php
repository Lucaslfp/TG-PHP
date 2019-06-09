<?php

include_once './../../common.php';
include_once './../banco.php';

$parametro = !empty($_GET['param']) ? $_GET['param'] : '';

if ($parametro == 'criar') {
    try {
        if (!empty($_POST)) {
            $secao = $_POST['nome-secao'];

            $id = rand(1, 1000000);

            $c = $pdo->query("INSERT INTO local SET idLocal = '{$id}', nome_local = '{$secao}'");

            if ($c)
                echo "<script>alert('Local cadastrado com sucesso.'); window.location.href = './../../cadastro.php'; </script>";
            else 
                echo "<script>alert('Erro ao cadastrar o local'); window.location = history.go(-1);</script>";
        }
    }

    catch(PDOException $e) {
        echo "ERRO: " . $e;
    }
}

else if ($parametro == "editar") {
    try {
        if (!empty($_POST)) {
            $secao = $_POST['novo_nome'];
            $id = $_GET['id'];

            $c = $pdo->query("UPDATE local SET idLocal = '{$id}', nome_local = '{$secao}' WHERE idLocal = '{$id}'");

            if ($c)
                echo "<script>alert('Informações atualizadas com sucesso'); window.location.href = './../../cadastro.php'; </script>";
            else 
                echo "<script>alert('Erro ao cadastrar o local'); window.location = history.go(-1);</script>";
        }
    }

    catch(PDOException $e) {
        echo "ERRO: " . $e;
    }
}

else if ($parametro == "excluir") {
    try {
        $id = $_GET['id'];
        $d = $pdo->query("DELETE FROM local WHERE idLocal = '{$id}'");
        header('Location: ./../../cadastro.php');
    }

    catch(PDOException $e) {
        echo "ERRO: " . $e;
    }
}

else {
    echo "Parametro inválido";
}