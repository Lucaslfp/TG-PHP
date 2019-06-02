<?php 
include_once 'common.php'; 
include_once './php/banco.php';

if (isset($_SESSION)) {
    if ($_SESSION['logado'] != 'logado')
        header('Location: login.php');
}

$listar = $pdo->query('SELECT * FROM colecao');
?>
<html>

    <head>
        <title>Consulta e Relatório</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="assets/img/museum-icon.png" />
        <?php include_once 'common/styles.php'; ?>
    </head>

    <body class="consultar">
        <?php include_once 'common/header.php'; ?>
        <div class="container">
            <div class="row background">
                <div class="consulta-imagem">
                    <img src="assets/img/museu-4.jpg" alt="museu1" />
                </div>
                <div class="aba-5 col-md-12">
                    <h3>Consulta de obras</h3>
                    <form id="consultar-obras" action="./php/obras/funcoes-obras.php?param=consulta" method="POST">
                        <label for='' class="titulos">Objeto<input type="text" id="titul" name="objeto" placeholder="Título/nome da obra" /></label>
                        <label for='' class="titulos">Código<input type="text" id="regist" name="codigo" placeholder="Código de registro da obra" /></label>
                        <label for='' class="titulos">Tombo<input type="text" id="tom" name="tombo" placeholder="Tombo da obra" /></label>
                        <label for='' class="titulos dimensoes-obra">Dimensões <br /> 
                            <input type="text" id="altura" name="altura" placeholder="Altura" /> 
                            <input type="text" id="largura" class="margin-vertical" name="largura" placeholder="Largura" /> 
                            <input type="text" id="profundidade" name="profundidade" placeholder="Profundidade" />
                        </label>
                        <label for='' class="titulos">Material<input type="text" id="collection" name="material" /></label>
                        <label for='' class="titulos">Data de criação<input type="date" id="init" name="data-criacao" /></label>
                        <!-- <label for='' class="titulos">Período final<input type="date" id="fim" name="data-fim" /></label> -->
                        <label for='' class="titulos">Seção
                            <select id="sect">
                                <option class="opt6">---</option>
                            </select>
                        </label>
                        <label for='' class="titulos db">Coleção
                            <select class="colecao" name="item-colecao">
                                <option></option>
                                <?php 
                                    foreach($listar->fetchAll() as $col_obras) {
                                        echo "<option value='".$col_obras['id_colecao']."'>".$col_obras['descricao']."</option>";
                                    }
                                ?>
                            </select>
                        </label>
                        <input type="submit" id="busc" name="item-buscar" value="Buscar">
                        <span id="cancelar-6"><a href="home.php">Cancelar</a></span>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once 'common/footer.php'; ?>

        <?php include_once 'common/scripts.php'; ?>
    </body>

</html>