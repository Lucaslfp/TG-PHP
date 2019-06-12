<?php
include_once './../../../common.php';
include_once './../../banco.php';

if (isset($_SESSION)) {
    if ($_SESSION['logado'] != 'logado')
        header('Location: ./../../../login.php');
}

$sql = $pdo->query("SELECT * FROM item WHERE inativo = 1");

?>
<html>

<head>
    <title>Items Inativos</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./../../../assets/img/museum-icon.png" />
    <?php include_once './../../../common/styles.php'; ?>
</head>

<body class="cadastrar">
    <?php include_once './../../../common/header.php'; ?>
    <div class="container">
        <div class="aba-1 col-md-12" style="display: block;">
            <h3>Resultado da consulta - Items Inativos</h3>
            <div id="cole-cadastrados">
                <div class="collecti" style="display:block;">
                    <a href="./imprimir_todos.php" target="_blank" class="btn btn-info imprimir-resultados">Imprimir Resultados</a>
                    <table class="table">
                        <tr>
                            <th>ID DO ITEM</th>
                            <th>TÍTULO DO ITEM</th>
                            <th>IMAGEM</th>
                            <th></th>
                        </tr>

                        <?php
                        foreach ($sql->fetchAll() as $r) {
                            $imagens = explode(' , ', $r['img']);
                            ?>
                            <tr>
                                <td><?php echo $r['id_item']; ?></td>
                                <td><?php echo $r['titulo']; ?></td>
                                <td><?php echo "<img src='http://localhost/tg/php/obras/imagens_obras/".$imagens[0]."' height='100' width='150'/>" ?></td>

                                <td class="icons">
                                    <a href="./../funcoes-obras.php?param=ativar&id=<?php echo $r['id_item'] ?>" class="editar_colecao">
                                        <img src="<?php echo SITEBASE; ?>assets/img/pencil.png" alt="edit" class="pencil" />
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include_once './../../../common/footer.php'; ?>

    <?php include_once './../../../common/scripts.php'; ?>
</body>

</html>