<?php
include_once './../../../common.php';
include_once './../../banco.php';

$id = addslashes($_GET['id']);

$listar = $pdo->query("SELECT * FROM item WHERE id_item = '{$id}'");

$i = $listar->fetch();

$imagens = explode(' , ', $i['img']);

$colecao = $pdo->query("SELECT * FROM colecao WHERE id_colecao = '{$i["colecao_id"]}'");
$col = $colecao->fetch();

$secao = $pdo->query("SELECT * FROM local WHERE idLocal = '{$i["secao"]}'");
$s = $secao->fetch();

?>
<html>
    <head>
        <title>Consulta</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="./../../../assets/img/museum-icon.png" />
        <?php include_once './../../../common/styles.php'; ?>
    </head>

    <body class="consultar">
        <?php include_once './../../../common/header.php'; ?>
        <div class="container">
            <div class="aba-1 col-md-12" style="display: block;">
                <h3>Resultado da consulta</h3>
                <form id="cadastro-obra" action="./../funcoes-obras.php?param=editar&id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                    <label for='codigo' class="titulos">Código<input type="text" id="codigo" name="item-cod" value="<?php echo $i['id_item']; ?>" readonly /></label>
                    <label for='titulo' class="titulos">Título<input type="text" id="titulo" name="item-titulo" value="<?php echo $i['titulo']; ?>" /></label>
                    <label for='tombo' class="titulos">Tombo<input type="number" id="tombo" name="item-tombo" value="<?php echo $i['tombo']; ?>" /></label>
                    <label for='altura' class="titulos dimensoes-obra">Dimensões <br />
                        <input type="text" id="altura" name="item-altura" value="<?php echo $i['altura']; ?>" />
                        <input type="text" id="largura" class="margin-vertical" name="item-largura" value="<?php echo $i['largura']; ?>" />
                        <input type="text" id="profundidade" name="item-profundidade" value="<?php echo $i['profundidade']; ?>" />
                    </label>
                    <label for='historico' class="titulos historico-obra">Histórico/Descrição<textarea cols="100" rows="5" id="historico" name="item-descricao"><?php echo $i['descricao']; ?></textarea></label>
                    <label for='' class="titulos">Data de criação<input type="text" id="data" name="item-data" value="<?php echo $i['data_criacao']; ?>" /></label>
                    <label for='' class="titulos">Autor/Artista<input type="text" id="doador" name="item-autor" value="<?php echo $i['autor_descobridor']; ?>" /></label>
                    <label for='estado-conservacao' class="titulos">Estado de conservação<input type="text" id="estado-conservacao" name="item-estado" value="<?php echo $i['conservacao']; ?>" /></label>
                    <label for='cidade-origem' class="titulos">Cidade<input type="text" id="cidade-origem" name="item-cidade" value="<?php echo $i['cidade']; ?>" /></label>
                    <label for='uf-obra' class="titulos">UF<input type="text" name="item-uf" id="uf-obra" value="<?php echo $i['estado']; ?>" /></label>
                    <label for='' class="titulos">Técnica<input type="text" id="tecnica" name="item-tecnica" value="<?php echo $i['tecnica']; ?>" /></label>
                    <label for='' class="titulos">Material<input type="text" id=material name="item-material" value="<?php echo $i['material']; ?>" /></label>
                    <label for='' class="titulos">Modelo<input type="text" id="modelo" name="item-modelo" value="<?php echo $i['modelo']; ?>" /></label>
                    <label for='' class="titulos">Seção
                        <select class="colecao" name="secao" required>
                            <option value="<?php echo $s['idLocal'] ?>"><?php echo $s['nome_local']?></option>
                            <option></option>
                            <?php
                                $se = $pdo->query("SELECT * FROM local");
                                foreach($se->fetchAll() as $secoes) {
                                    echo "<option value='".$secoes['idLocal']."'>".$secoes['nome_local']."</option>";
                                }
                            ?>
                        </select></label>
                    <label for='' class="titulos">Coleção<span class="error-message msg22">(Selecione uma coleção)</span>
                            <select class="colecao" name="item-colecao" required>
                                <option value="<?php echo $col['id_colecao'] ?>"><?php echo $col['descricao']?></option>
                                <option></option>
                                <?php
                                    $listar_col = $pdo->query("SELECT * FROM colecao");
                                    foreach($listar_col->fetchAll() as $col_obras) {
                                        echo "<option value='".$col_obras['id_colecao']."'>".$col_obras['descricao']."</option>";
                                    }
                                ?>
                            </select>
                        </label><br />
                    <label for='' class="titulos observacoes-obra">Observações<textarea cols="100" rows="5" name="item-obs" class="text-cadastro"><?php echo $i['obs']; ?></textarea></label><br />
                    <label for='' class="titulos">Inserir imagem<input type="file" id="imagem" name="item-img[]" multiple /></label><br />
                    <div class="imagem-obra">
                        <?php
                            $cont = 1;
                            foreach($imagens as $img) {
                                echo '<div class="area-imagem spot'.$cont.'"><img src="'.SITEBASE.'php/obras/imagens_obras/'.$img.'" /></div>';
                                $cont++;
                            }
                        ?>
                    </div>
                    <br />
                    
                    <input type="submit" value="Salvar" class="btn btn-primary" />
                    <a href="imprimir.php?id=<?php echo $id; ?>" target="_blank" id="imprimir" class="btn btn-success">Imprimir</a>
                </form>
            </div>
        </div>

        <?php include_once './../../../common/footer.php'; ?>

        <?php include_once './../../../common/scripts.php'; ?>
    </body>
</html>