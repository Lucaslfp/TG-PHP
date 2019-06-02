<?php

include_once '../../common.php';
include_once '../banco.php';

$parametro = $_GET['param'];

if ($parametro == "cadastro") {
    $obra = [
        "codigo" => $_POST['item-cod'],
        "titulo" => $_POST['item-titulo'],
        "tombo" => $_POST['item-tombo'],
        "altura" => $_POST['item-altura'],
        "largura" => $_POST['item-largura'],
        "profundidade" => $_POST['item-profundidade'],
        "descricao" => $_POST['item-descricao'],
        "data" => $_POST['item-data'],
        "doador" => $_POST['item-doador'],
        "entrada" => $_POST['item-entrada'],
        "estado" => $_POST['item-estado'],
        "cidade" => $_POST['item-cidade'],
        "uf" => $_POST['item-uf'],
        "autor" => $_POST['item-autor'],
        "tecnica" => $_POST['item-tec'],
        "material" => $_POST['item-material'],
        "modelo" => $_POST['item-modelo'],
        "categoria" => $_POST['item-categoria'],
        "colecao" => $_POST['item-colecao'],
        "obs" => $_POST['item-obs']
    ];

    $id_obra = rand(1, 1000000);

    if (isset($_FILES['item-img'])) {
        $imagem = $_FILES['item-img'];
        $numArquivo = count(array_filter($imagem['name']));

        for ($i = 0; $i < $numArquivo; $i++) {
            $obra_tmp = $imagem['tmp_name'][$i];
            $nome = $imagem[ 'name' ][$i];
        
            $extensao = pathinfo ($nome, PATHINFO_EXTENSION);  
            $extensao = strtolower ($extensao);
        
            if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                $novoNome[] = uniqid ( time () ) . '.' . $extensao;
                $destino = 'imagens_obras/' . $novoNome[$i];
                move_uploaded_file($obra_tmp, $destino);
            }

            else {
                echo "<script>alert('Tipo de arquivo inválido.'); window.location = history.go(-1);</script>";
            } 
        }

        $img_obra = implode(" , ", $novoNome);

        $salvar_obra = $pdo->query(
            "INSERT INTO item SET " .
            "id_item = '{$id_obra}'," .
            "tombo = '{$obra["tombo"]}'," .
            "titulo = '{$obra["titulo"]}'," .
            "largura = '{$obra["largura"]}'," .
            "altura = '{$obra["altura"]}'," .
            "profundidade = '{$obra["profundidade"]}'," .
            "cidade = '{$obra["cidade"]}'," .
            "estado = '{$obra["uf"]}'," .
            "descricao = '{$obra["descricao"]}'," .
            "obs = '{$obra["obs"]}'," .
            "conservacao = '{$obra["estado"]}'," .
            "data_criacao = '{$obra["data"]}'," .
            "autor_descobridor = '{$obra["autor"]}'," .
            "material = '{$obra["material"]}'," .
            "tecnica = '{$obra["tecnica"]}'," .
            "modelo = '{$obra["modelo"]}'," .
            "img = '{$img_obra}'," .
            "colecao_id = '{$obra["colecao"]}'"
        );

        if ($salvar_obra) {
            echo "<script>alert('Obra salva com sucesso!!'); window.location.href = '../../cadastro.php';</script>";
        }

        else {
            echo "<script>alert('Dados incorretos, verifique e tente novamente.'); window.location = history.go(-1);</script>";
        }
    }
}