<?php
include_once 'common.php';
include_once './php/banco.php';
?>
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="assets/img/museum-icon.png" />
        <?php include_once 'common/styles.php'; ?>
    </head>

    <body class="cadastrar" onload="window.print();">
        <?php include_once 'common/header.php'; ?>
        <div class="container">
            <div class="aba-1 col-md-12" style="display: block;">
                <h3>Resultado da consulta</h3>
                <form id="cadastro-obra">
                    <label for='codigo' class="titulos">Código<input type="text" id="codigo" name="item-cod" readonly /></label>
                    <label for='titulo' class="titulos">Título<input type="text" id="titulo" name="item-titulo" readonly /></label>
                    <label for='tombo' class="titulos">Tombo<input type="number" id="tombo" name="item-tombo" readonly /></label>
                    <label for='altura' class="titulos dimensoes-obra">Dimensões <br />
                        <input type="text" id="altura" name="item-altura" readonly />
                        <input type="text" id="largura" class="margin-vertical" name="item-largura" readonly />
                        <input type="text" id="profundidade" name="item-profundidade" readonly />
                    </label>
                    <label for='historico' class="titulos historico-obra">Histórico/Descrição<textarea cols="100" rows="5" id="historico" name="item-descricao" readonly></textarea></label>
                    <label for='' class="titulos">Data de doação<input type="text" id="data" name="item-data" readonly /></label>
                    <label for='' class="titulos">Doador<input type="text" id="doador" name="item-doador" readonly /></label>
                    <label for='' class="titulos">Data de entrada<input type="text" id="entrada" name="item-entrada" readonly /></label>
                    <label for='estado-conservacao' class="titulos">Estado de conservação<input type="text" id="estado-conservacao" name="item-estado" readonly /></label>
                    <label for='cidade-origem' class="titulos">Cidade<input type="text" id="cidade-origem" name="item-cidade" readonly /></label>
                    <label for='uf-obra' class="titulos">UF<input type="text" name="item=uf" id="uf-obra" readonly /></label>
                    <label for='' class="titulos">Autor/Artista<input type="text" id="autor" name="item-autor" readonly /></label>
                    <label for='' class="titulos">Técnica<input type="text" id="tecnica" name="item-tec" readonly /></label>
                    <label for='' class="titulos">Material<input type="text" id=material name="item-material" readonly /></label>
                    <label for='' class="titulos">Modelo<input type="text" id="modelo" name="item-modelo" readonly /></label>
                    <label for='' class="titulos">Coleção<input type="text" id="colecao" name="item-colecao" readonly /></label>
                    </label><br />
                    <label for='' class="titulos">Observações<textarea cols="100" rows="5" name="item-obs" readonly></textarea></label><br />
                    <span id="cancelar-2">Voltar</span>
                </form>
            </div>
        </div>
    </body>
</html>