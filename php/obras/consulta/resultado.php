<?php
include_once './../../../common.php';
include_once './../../banco.php';

if (isset($_SESSION)) {
    if ($_SESSION['logado'] != 'logado')
        header('Location: ./../../../login.php');
}

if (isset($_POST)) {
    $co = '';
    $se = '';

    if (!empty($_POST['colecao_id'])) {
        $c_id = $_POST['colecao_id'];

        $c = $pdo->query("SELECT * FROM colecao WHERE descricao = '{$c_id}'");
        
        $co = $c->fetch();
    }

    if (!empty($_POST['secao'])) {
        $s_id = $_POST['secao'];

        $s = $pdo->query("SELECT * FROM local WHERE nome_local = '{$s_id}'");
        
        $se = $s->fetch();
    }

    $campos = array();

    if (isset($_POST['titulo'])) {
        $titulo = $_POST['titulo'];
        $campos[] = "titulo = '{$titulo}'";
    }
    if (isset($_POST['tombo']))
        $campos[] = "tombo = " . $_POST['tombo'];
    if (isset($_POST['id_item']))
        $campos[] = "id_item = " . $_POST['id_item'];
    if (isset($_POST['colecao_id']))
        $campos[] = "colecao_id = " . $co['id_colecao'];
    if (isset($_POST['data_criacao'])) {
        $data = $_POST['data_criacao'];
        $campos[] = "data_criacao = '{$data}'";
    }
    if (isset($_POST['secao']))
        $campos[] = 'secao = ' . $se['idLocal'];

    $dados = implode(" AND ", $campos);

    $sql = $pdo->query("SELECT * FROM item WHERE {$dados}");

    $sql2 = $pdo->query("SELECT * FROM item WHERE {$dados}");
    $_SESSION['resultados'] = $sql2->fetchAll();

    // echo "SELECT * FROM item WHERE {$dados}";

    if (!$sql) {
        echo "<script>alert('Nenhum resultado encontrado.'); window.location.href = './../../../consulta.php'</script>";
    }
}

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
                    <a href="./imprimir_resultados.php" target="_blank" class="btn btn-info imprimir-resultados">Imprimir Resultados</a>
                    <table class="table">
                        <tr>
                            <th>ID DO ITEM</th>
                            <th>TÍTULO DO ITEM</th>
                            <th>IMAGEM</th>
                            <th></th>
                            <th></th>
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
                                    <a href="./../funcoes-obras.php?param=excluir&id=<?php echo $r['id_item'] ?>" onclick="return confirm('Deseja mesmo excluir?')">
                                        <img src="<?php echo SITEBASE; ?>assets/img/icon x.png" alt="x" class="icon-x" />
                                    </a>
                                </td>

                                <td class="icons">
                                    <a href="./resultado_consulta.php?id=<?php echo $r['id_item'] ?>" class="editar_colecao">
                                        <img src="<?php echo SITEBASE; ?>assets/img/pencil.png" alt="edit" class="pencil" />
                                    </a>
                                </td>

                                <td class="icons">
                                    <a href="./imprimir.php?id=<?php echo $r['id_item'] ?>" target="_blank">
                                        imprimir
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