<?php
include_once '../../common.php';
include_once '../banco.php';

$parametro = addslashes($_GET['param']);

// COLEÇÕES
if ($parametro == 'criar_colecao') {
    $nome_colecao = addslashes($_POST['cole-nome']);
    $id_colecao = rand(1, 1000000);

    $cad = $pdo->prepare('INSERT INTO colecao SET id_colecao = :id_colecao, descricao = :nome_colecao');
    $cad->bindValue(':id_colecao', $id_colecao);
    $cad->bindValue(':nome_colecao', $nome_colecao);
    $cad->execute();

    if ($cad->rowCount() > 0)
        echo "<script>alert('Coleção cadastrada com sucesso!'); window.location = history.go(-1);</script>";
    else
        echo "<script>alert('Falha no cadastro, tente novamente mais tarde.'); window.location = history.go(-1);</script>";
}

else if ($parametro == 'editar_colecao') {
    $id = addslashes($_GET['id']);
    $desc = addslashes($_POST['novo_nome']);

    $editar = $pdo->query("UPDATE colecao SET descricao = '{$desc}' WHERE id_colecao = '{$id}'");

    if ($editar->rowCount() > 0) {
        echo "<script>alert('Dados atualizados com sucesso'); window.location.href = './../../cadastro.php'</script>";
    }
    else {
        echo "<script>alert('Erro ao atualizar os dados'); window.location = history.go(-1);</script>";
    }
}

else if ($parametro == 'excluir_colecao') {
    $id = addslashes($_GET['id']);
    $del = $pdo->query("DELETE FROM colecao WHERE id_colecao = '{$id}'");
    header('Location: ./../../cadastro.php');
}