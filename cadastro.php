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

    <body class="cadastrar">
        <?php include_once 'common/header.php'; ?>
        <div class="container">
            <div class="row background">
                <div class="imagem">
                    <img src="assets/img/Museu2.jpg" alt="museu1">
                </div>
                <div class="col-md-12">
                    <ul class="abas">
                        <li class="obra">Obras</li>
                        <li class="secao">Seção</li>
                        <li class="material">Material</li>
                        <li class="colecao">Coleção</li>
                    </ul>
                </div>
                <div class="aba-1 col-md-12" style="display: block;">
                    <h3>Cadastro de obra</h3>
                    <span class="error-message msg23">Informações não preechidas corretamente</span>
                    <form id="cadastro-obra">
                        <label for='codigo' class="titulos">Código<span class="error-message msg16">(Digite um código)</span><input type="text" id="codigo" name="peca-cod" placeholder="Código de Registro" /></label>
                        <label for='titulo' class="titulos">Título<span class="error-message msg17">(Digite um título)</span><input type="text" id="titulo" name="peca-titulo" placeholder="Nome da peça" /></label>
                        <label for='tombo' class="titulos">Tombo<input type="text" id="tombo" name="peca-tombo" placeholder="Tombo da peça" /></label>
                        <label for='altura' class="titulos dimensoes-obra">Dimensões <br />
                            <input type="text" id="altura" name="item-altura" placeholder="Altura" />
                            <input type="text" id="largura" class="margin-vertical" name="item-largura" placeholder="Largura">
                            <input type="text" id="profundidade" name="item-profundidade" placeholder="Profundidade">
                        </label>
                        <label for='historico' class="titulos historico-obra">Histórico/Descrição<textarea cols="100" rows="5" id="historico" placeholder="Histórico da obra"></textarea></label>
                        <label for='' class="titulos">Data de doação<input type="date" id="data" name="item-data" /></label>
                        <label for='' class="titulos">Doador<input type="text" id="doador" name="item-doador" placeholder="Nome e sobrenome do doador" /></label>
                        <label for='' class="titulos">Data de entrada<span class="error-message msg18">(Digite uma data de entrada)</span><input type="date" id="entrada" name="item-entr" /></label>
                        <label for='estado-conservacao' class="titulos">Estado de conservação<input type="text" id="estado-conservacao" name="item-estado" placeholder="Estado de conservação da obra" /></label>
                        <label for='cidade-origem' class="titulos">Cidade<input type="text" id="cidade-origem" name="cidade-origem" placeholder="Cidade de origem" /></label>
                        <label for='uf-obra' class="titulos">UF
                            <select id="uf-obra">
                                <option>---</option><option>AC</option><option>AL</option><option>AP</option><option>AM</option>
                                <option>BA</option><option>CE</option><option>DF</option><option>ES</option><option>GO</option>
                                <option>MA</option><option>MT</option><option>MS</option><option>MG</option><option>PA</option>
                                <option>PB</option><option>PR</option><option>PE</option><option>PI</option><option>RJ</option>
                                <option>RN</option><option>RS</option><option>RO</option><option>RR</option><option>SC</option>
                                <option>SP</option><option>SE</option><option>TO</option>
                            </select>
                        </label>
                        <label for='' class="titulos">Autor/Artista<span class="error-message msg19">(Digite um autor/artista)</span><input type="text" id="autor" name="item-autor" placeholder="Nome e sobrenome do autor da obra" /></label>
                        <label for='' class="titulos">Técnica<input type="text" id="tecnica" name="item-tec" placeholder="Técnica utilizada" /></label>
                        <label for='' class="titulos">Material
                            <select class="opt-mat">
                                <option>---</option>
                        </select>
                        </label>
                        <label for='' class="titulos">Modelo<input type="text" id="modelo" name="item-model" /></label>
                        <label for='' class="titulos">Categoria<span class="error-message msg20">(Digite uma categoria)</span><input type="text" id="categoria" name="item-cat" placeholder="Categoria em que o item se encaixa" /></label>
                        <label for='' class="titulos">Localização<span class="error-message msg21">(Selecione uma localização)</span><select class="local">
                            <option>---</option>
                        </select></label><br />
                        <label for='' class="titulos">Coleção<span class="error-message msg22">(Selecione uma coleção)</span>
                            <select class="colecao">
                                <option>---</option>
                            </select>
                        </label><br />
                        <label for='' class="titulos">Observações<textarea cols="100" rows="5" placeholder="Espaço para observações"></textarea></label><br />
                        <label for='' class="titulos">Inserir imagem<input type="file" id="imagem" name="item-img" /></label><br />
                        <div class="imagem-obra">
                            <div class="area-imagem">Espaço para imagem</div>
                        </div>
                        <div class="button">
                            <img src="assets/img/mais.png" alt="plus" id="plus" />
                            <img src="assets/img/menos.png" alt="minus" id="minus" />
                        </div>
                        <br />
                        <input type="submit" id="salvar" name="item-salvar" value="Salvar">
                        <span id="cancelar-2">Cancelar</span>
                    </form>
                </div>
                <div class="aba-2 col-md-12">
                    <h3>Cadastro de Seção</h3>
                    <form id="cadastro-secao" action="" method="POST">
                        <label for='' class="titulos">Espaço físico<span class="error-message msg24">(Digite uma seção)</span><input type="text" id="secao-id" name="secao-nome" placeholder="Nome da Seção" /></label>
                        <br />
                        <input type="submit" id="salvar2" name="item-salvar2" value="Salvar">
                        <span id="cancelar-3">Cancelar</span>
                        <div id="sec-cadastradas">
                            <h3>Seções cadastradas</h3>
                            <div class="sec">
                                <span class="icons">
                                    <img src="assets/img/icon x.png" alt="x" class="icon-x" />
                                    <img src="assets/img/pencil.png" alt="edit" class="pencil" />
                                </span>
                                <span class="itens2"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="aba-3 col-md-12">
                    <h3>Cadastro de Material</h3>
                    <form id="cadastro-material" method="POST">
                        <label for='' class="titulos">Material<span class="error-message msg25">(Digite o nome de um material)</span><input type="text" id="material" name="mat-nome" placeholder="Nome do Material" /></label>
                        <br />
                        <input type="submit" id="salvar3" name="item-salvar3" value="Salvar">
                        <span id="cancelar-4">Cancelar</span>
                        <div id="materiais-cadastrados">
                            <h3>Materiais Cadastrados</h3>
                            <div class="material">
                                <span class="icons">
                                    <img src="assets/img/icon x.png" alt="x" class="icon-x" />
                                    <img src="assets/img/pencil.png" alt="edit" class="pencil" />
                                </span>
                                <span class="itens2"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="aba-4 col-md-12">
                    <h3>Cadastro de Coleção</h3>
                    <form id="cadastro-colecao" action="./php/colecao/funcoes-colecao.php?param=criar_colecao" method="POST">
                        <label for='' class="titulos">Coleção<span class="error-message msg26">(Digite o nome de uma coleção)</span><input type="text" id="cole" name="cole-nome" placeholder="Nome da Coleção" /></label>
                        <br />
                        <input type="submit" id="salvar4" name="item-salvar3" value="Salvar">
                        <span id="cancelar-5">Cancelar</span>
                        <div id="cole-cadastrados">
                            <h3>Coleções Cadastradas</h3>
                            <div class="collecti" style="display:block;">
                                <table class="table">
                                    <tr>
                                        <th>ID DA COLEÇÃO</th>
                                        <th>DESCRIÇÃO DA COLEÇÃO</th>
                                    </tr>

                                    <?php
                                    $listar = $pdo->query('SELECT * FROM colecao');
                                    foreach($listar->fetchAll() as $colecoes) {
                                    ?>
                                    <tr>
                                        <td><?php echo $colecoes['id_colecao']; ?></td>
                                        <td><?php echo $colecoes['descricao']; ?></td>
    
                                        <td class="icons">
                                            <a href="./php/colecao/funcoes-colecao.php?param=excluir_colecao&id=<?php echo $colecoes['id_colecao']?>">
                                                <img src="assets/img/icon x.png" alt="x" class="icon-x" />
                                            </a>
                                        </td>

                                        <td class="icons">
                                            <a class="editar_colecao" data-toggle="modal" data-doc="<?php echo $colecoes['id_colecao']; ?>" data-target="#myModal">
                                                <img src="assets/img/pencil.png" alt="edit" class="pencil" />
                                            </a>
                                        </td>
                                    </tr>                            
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form method="POST">
                            <input type="text" class="titulos" name="nome_colecao" placeholder="Digite o novo nome para a coleção" />
                            
                            <input type="submit" name="enviar" class="btn btn-primary" />
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <?php include_once 'common/footer.php'; ?>

        <?php include_once 'common/scripts.php'; ?>
    </body>
</html>