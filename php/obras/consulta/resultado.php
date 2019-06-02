<?php
include_once './../../../common.php';
include_once './../../banco.php';
?>
<html>

<head>
    <title>Cadastro</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./../../../assets/img/museum-icon.png" />
    <?php include_once './../../../common/styles.php'; ?>
</head>

<body class="cadastrar">
    <?php include_once './../../../common/header.php'; ?>
    <div class="container">
        <div class="aba-1 col-md-12" style="display: block;">
            <h3>Resultado da consulta</h3>
            <div id="cole-cadastrados">
                <div class="collecti" style="display:block;">
                    <table class="table">
                        <tr>
                            <th>ID DO ITEM</th>
                            <th>TÍTULO DO ITEM</th>
                        </tr>

                        <?php
                        foreach ($_SESSION['result_consulta'] as $r) {
                            ?>
                            <tr>
                                <td><?php echo $r['id_item']; ?></td>
                                <td><?php echo $r['titulo']; ?></td>

                                <td class="icons">
                                    <a href="./../funcoes-obras.php?param=excluir&id=<?php echo $r['id_item'] ?>" onclick="return confirm('Deseja mesmo excluir?')">
                                        <img src="<?php echo SITEBASE; ?>assets/img/icon x.png" alt="x" class="icon-x" />
                                    </a>
                                </td>

                                <td class="icons">
                                    <a href="./resultado_consulta.php?id=<?php echo $r['id_item'] ?>" class="editar_colecao">
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