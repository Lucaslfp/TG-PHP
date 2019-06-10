<?php
include_once './../../../common.php';
include_once './../../banco.php';

if (isset($_SESSION)) {
    if ($_SESSION['logado'] != 'logado')
        header('Location: ./../../../login.php');
}

$sql = $pdo->query("SELECT * FROM item");

?>
<html>

<head>
    <title>Cadastro</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./../../../assets/img/museum-icon.png" />
    <?php include_once './../../../common/styles.php'; ?>
</head>

<body class="cadastrar" onload="window.print()">
    <div class="container" style="padding-top: 50px;">
        <div class="aba-1 col-md-12" style="display: block;">
            <h3>Resultado da consulta</h3>
            <div id="cole-cadastrados">
                <div class="collecti" style="display:block;">
                    <table class="table">
                        <tr>
                            <th>ID DO ITEM</th>
                            <th>TÍTULO DO ITEM</th>
                            <th>IMAGEM</th>
                        </tr>

                        <?php
                        foreach ($sql->fetchAll() as $r) {
                            $imagens = explode(' , ', $r['img']);
                            ?>
                            <tr>
                                <td><?php echo $r['id_item']; ?></td>
                                <td><?php echo $r['titulo']; ?></td>
                                <td><?php echo "<img src='http://localhost/tg/php/obras/imagens_obras/".$imagens[0]."' height='100' width='150'/>" ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './../../../common/scripts.php'; ?>
</body>

</html>