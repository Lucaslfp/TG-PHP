<?php 
include_once 'common.php'; 
include_once './php/banco.php';

$listar = $pdo->query('SELECT * FROM colecao');
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
                        <li class="colecao">Coleção</li>
                    </ul>
                </div>
                <div class="aba-1 col-md-12" style="display: block;">
                    <h3>Cadastro de obra</h3>
                    <span class="error-message msg23">Informações não preechidas corretamente</span>
                    <form id="cadastro-obra" method="POST" action="./php/obras/funcoes-obras.php?param=cadastro" enctype="multipart/form-data">
                        <label for='codigo' class="titulos">Código<input type="text" id="codigo" name="item-cod" placeholder="Código de Registro" required /></label>
                        <label for='titulo' class="titulos">Título<input type="text" id="titulo" name="item-titulo" placeholder="Nome da peça" required /></label>
                        <label for='tombo' class="titulos">Tombo<input type="number" id="tombo" name="item-tombo" placeholder="Tombo da peça" /></label>
                        <label for='altura' class="titulos dimensoes-obra">Dimensões <br />
                            <input type="text" id="altura" name="item-altura" placeholder="Altura" />
                            <input type="text" id="largura" class="margin-vertical" name="item-largura" placeholder="Largura">
                            <input type="text" id="profundidade" name="item-profundidade" placeholder="Profundidade">
                        </label>
                        <label for='historico' class="titulos historico-obra">Histórico/Descrição<textarea cols="100" rows="5" id="historico" class="text-cadastro" name="item-descricao" placeholder="Histórico da obra"></textarea></label>
                        <label for='' class="titulos">Data de doação<input type="date" id="data" name="item-data" /></label>
                        <label for='' class="titulos">Doador<input type="text" id="doador" name="item-doador" placeholder="Nome e sobrenome do doador" /></label>
                        <label for='' class="titulos">Data de entrada<input type="date" id="entrada" name="item-entrada" required /></label>
                        <label for='estado-conservacao' class="titulos">Estado de conservação<input type="text" id="estado-conservacao" name="item-estado" placeholder="Estado de conservação da obra" /></label>
                        <label for='cidade-origem' class="titulos">Cidade<input type="text" id="cidade-origem" name="item-cidade" placeholder="Cidade de origem" /></label>
                        <label for='uf-obra' class="titulos">UF
                            <select id="uf-obra" name="item-uf">
                                <option>---</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </label>
                        <label for='' class="titulos">Autor/Artista<input type="text" id="autor" name="item-autor" placeholder="Nome e sobrenome do autor da obra" required /></label>
                        <label for='' class="titulos">Técnica<input type="text" id="tecnica" name="item-tec" placeholder="Técnica utilizada" /></label>
                        <label for='' class="titulos">Material<input type="text" id=material name="item-material" />
                            <!-- <select class="opt-mat" name="item-material">
                                <option>---</option>
                        </select> -->
                        </label>
                        <label for='' class="titulos">Modelo<input type="text" id="modelo" name="item-modelo" /></label>
                        <label for='' class="titulos">Categoria<input type="text" id="categoria" name="item-categoria" placeholder="Categoria em que o item se encaixa" required /></label>
                        <!-- <label for='' class="titulos">Localização<select class="local" req>
                            <option>---</option>
                        </select></label><br /> -->
                        <label for='' class="titulos">Coleção<span class="error-message msg22">(Selecione uma coleção)</span>
                            <select class="colecao" name="item-colecao" required>
                                <?php 
                                    foreach($listar->fetchAll() as $col_obras) {
                                        echo "<option value='".$col_obras['id_colecao']."'>".$col_obras['descricao']."</option>";
                                    }
                                ?>
                            </select>
                        </label><br />
                        <label for='' class="titulos observacoes-obra">Observações<textarea cols="100" rows="5" name="item-obs" class="text-cadastro" placeholder="Espaço para observações"></textarea></label><br />
                        <label for='' class="titulos">Inserir imagem<input type="file" id="imagem" name="item-img[]" multiple /></label><br />
                        <div class="imagem-obra"></div>
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
                                    $listar2 = $pdo->query('SELECT * FROM colecao');
                                    foreach($listar2->fetchAll() as $colecoes) {
                                    ?>
                                    <tr>
                                        <td><?php echo $colecoes['id_colecao']; ?></td>
                                        <td><?php echo $colecoes['descricao']; ?></td>
    
                                        <td class="icons">
                                            <a href="./php/colecao/funcoes-colecao.php?param=excluir_colecao&id=<?php echo $colecoes['id_colecao']?>" onclick="return confirm('Deseja mesmo excluir?')">
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
                            <input type="text" class="titulos titulo-modal" name="nome_colecao" placeholder="Digite o novo nome para a coleção" />
                            
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