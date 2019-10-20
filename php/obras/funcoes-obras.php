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
        "secao" => $_POST['secao'],
        "colecao" => $_POST['item-colecao'],
        "obs" => $_POST['item-obs']
    ];

    $o = $pdo->prepare('SELECT * FROM item WHERE id_item = ?');
    $o->bindValue(1, $obra['codigo']);
    $o->execute();

    if ($o->rowCount() > 0)
        echo "<script>alert('Obra já cadastrada'); window.location = history.go(-1);</script>";

    $novoNome = array();

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
                $data = file_get_contents($destino);
                $img64 = 'data:image/' . $extensao . ';base64,' . base64_encode($data);
            }

            else {
                echo "<script>alert('Tipo de arquivo inválido.'); window.location = history.go(-1);</script>";
            } 
        }

        $img_obra = implode(" , ", $novoNome);

        $salvar_obra = $pdo->query(
            "INSERT INTO item SET " .
            "id_item = '{$obra['codigo']}'," .
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
            "secao = '{$obra["secao"]}', ".
            "tecnica = '{$obra["tecnica"]}'," .
            "modelo = '{$obra["modelo"]}'," .
            "img = '{$img64}'," .
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

else if ($parametro == "editar") {
    $id = addslashes($_GET['id']);

    $imagem = $_FILES['item-img'];
    $numArquivo = count(array_filter($imagem['name']));

    $novoNome = array();

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

    $img_obra = implode(" | ", $novoNome);

    $editar = '';

    if ($img_obra != '') {
        $editar = $pdo->query("UPDATE item 
            SET 
                titulo = '{$_POST["item-titulo"]}',
                tombo = '{$_POST["item-tombo"]}',
                altura = '{$_POST["item-altura"]}',
                largura = '{$_POST["item-largura"]}',
                profundidade = '{$_POST["item-profundidade"]}',
                descricao = '{$_POST["item-descricao"]}',
                data_criacao = '{$_POST["item-data"]}',
                autor_descobridor = '{$_POST["item-autor"]}',
                conservacao = '{$_POST["item-estado"]}',
                cidade = '{$_POST["item-cidade"]}',
                estado = '{$_POST["item-uf"]}',
                tecnica = '{$_POST["item-tecnica"]}',
                material = '{$_POST["item-material"]}',
                secao = '{$_POST["secao"]}',
                modelo = '{$_POST["item-modelo"]}',
                colecao_id = '{$_POST["item-colecao"]}',
                obs = '{$_POST["item-obs"]}',
                img = '{$img_obra}'
            WHERE id_item = '{$id}'");
    }

    else {
        $editar = $pdo->query("UPDATE item 
            SET 
                titulo = '{$_POST["item-titulo"]}',
                tombo = '{$_POST["item-tombo"]}',
                altura = '{$_POST["item-altura"]}',
                largura = '{$_POST["item-largura"]}',
                profundidade = '{$_POST["item-profundidade"]}',
                descricao = '{$_POST["item-descricao"]}',
                data_criacao = '{$_POST["item-data"]}',
                autor_descobridor = '{$_POST["item-autor"]}',
                conservacao = '{$_POST["item-estado"]}',
                cidade = '{$_POST["item-cidade"]}',
                estado = '{$_POST["item-uf"]}',
                tecnica = '{$_POST["item-tecnica"]}',
                material = '{$_POST["item-material"]}',
                secao = '{$_POST["secao"]}',
                modelo = '{$_POST["item-modelo"]}',
                colecao_id = '{$_POST["item-colecao"]}',
                obs = '{$_POST["item-obs"]}'
            WHERE id_item = '{$id}'");
    }

    if ($editar) {
        echo "<script>alert('Dados atualizados com sucesso'); window.location.href = './../../consulta.php'</script>";
    }
    else {
        echo "<script>alert('Erro ao atualizar os dados'); window.location = history.go(-1);</script>";
    }
}

else if ($parametro == "excluir") {
    $id = addslashes($_GET['id']);
    $del = $pdo->query("UPDATE item SET inativo = 1 WHERE id_item = '{$id}'");
    header('Location: ./../../consulta.php');
}

else if ($parametro == "ativar") {
    $id = $_GET['id'];

    $at = $pdo->query("UPDATE item SET inativo = 0 WHERE id_item = '{$id}'");
    echo "<script>alert('Obra ativada com sucesso'); window.location.href = './consulta/inativos.php'</script>";
}

function find_empty ($array) {
    $vazio = 'false';

    foreach($array as $key => $value) {
        $vazio = empty($value) ? 'true' : 'false';
    }

    return $vazio;
}