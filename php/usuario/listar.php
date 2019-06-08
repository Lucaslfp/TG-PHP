<?php
include_once './../../common.php';
include_once './../banco.php';

if (isset($_SESSION)) {
    if ($_SESSION['logado'] != 'logado')
        header('Location: login.php');
}

$l = $pdo->query("SELECT * FROM usuario");
?>

<html>

<head>
    <title>Cadastrar Usuário</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include_once './../../common/styles.php'; ?>
    <link rel="shortcut icon" href="./../../assets/img/icon.png" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="back col-md-12">
                <div class="form-register-user">
                    <div class="header-form">
                        <img src="./../../assets/img/logo-fatec.png" alt="logo">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="back col-lg-6" style="margin-bottom: 20px;">
                <a class="btn btn-primary" href="./../../cadastrar-usuario.php">Cadastrar novo usuário</a>
                <a class="btn btn-danger" href="<?php echo SITEBASE; ?>">Voltar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <tr>
                        <th>CPF</th>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>TIPO</th>
                        <th></th>
                        <th></th>
                    </tr>

                    <?php foreach ($l->fetchAll() as $u) { ?>

                    <tr>
                        <td><?php echo $u['cpf']; ?></td>
                        <td><?php echo $u['nome']; ?></td>
                        <td><?php echo $u['email']; ?></td>
                        <td><?php echo $u['tipo']; ?></td>
                        <td class="icons">
                            <a href="./funcoes-user.php?param=excluir_u&id=<?php echo $u['cpf']?>" onclick="return confirm('Deseja mesmo excluir?')">
                                <img src="./../../assets/img/icon x.png" alt="x" class="icon-x" style="height: 20px;" />
                            </a>
                        </td>

                        <td class="icons">
                            <a class="editar_colecao" href="./editar.php?id=<?php echo $u['cpf']?>">
                                <img src="./../../assets/img/pencil.png" alt="edit" class="pencil" style="height: 20px;" />
                            </a>
                        </td>
                    </tr>

                    <?php } ?>

                </table>
            </div>
        </div>

    </div>
    <?php include_once './../../common/scripts.php'; ?>
</body>

</html>