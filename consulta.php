<?php 
include_once './common.php'; 
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
        <?php include_once './common/styles.php'; ?>
    </head>

    <body class="consultar">
        <?php include_once './common/header.php'; ?>
        <div class="container">
            <div class="row background">
                <div class="aba-5 col-md-12">
                    <h3>Consulta de obras</h3>
                    <div class="check-list">
                        <label for="checks">Objeto</label><input class="checkboxes" type="checkbox" id="titul" name="check">
                        <label for="checks">Código</label><input class="checkboxes" type="checkbox" id="regist" name="check">
                        <label for="checks">Tombo</label><input class="checkboxes" type="checkbox" id="tom" name="check">
                        <label for="checks">Material</label><input class="checkboxes" type="checkbox" id="collection" name="check">
                        <label for="checks">Data de criação</label><input class="checkboxes" type="checkbox" id="init" name="check">
                        <label for="checks">Seção</label><input class="checkboxes" type="checkbox" id="sect" name="check">
                    </div>
                    <form id="consultar-obras" action="./php/obras/funcoes-obras.php?param=consulta" method="POST" enctype="multipart/form-data">
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
        <?php include_once './common/footer.php'; ?>

        <?php include_once './common/scripts.php'; ?>
    </body>

</html>