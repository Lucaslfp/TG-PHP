<?php
include_once 'common.php'; 

if (!empty($_SESSION)) {
    if (isset($_SESSION['logado'])) {
        if ($_SESSION['logado'] == 'logado')
            header('Location: home.php');
    }
}
?>
<html>

    <head>
        <title>Login no sistema</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php include_once 'common/styles.php'; ?>
        <link rel="shortcut icon" href="assets/img/icon.png" />
    </head>

    <body class="login">
        <div class="container">
            <div class="row">
                <div class="back col-md-12">
                    <div class="form-login">
                        <div class="header-form">
                            <img src="assets/img/logo-fatec.png" alt="logo">
                        </div>
                        <h3>Entrar no sistema:</h3>
                        <form id="login-sistema" action="php/usuario/funcoes-user.php?param=login" method="POST">
                            <p class="titulos">CPF
                                <input type="text" id="nome" name="cpf" class="input-info" placeholder="Digite o seu CPF" required /></p><br />
                            <p class="titulos">Senha
                                <input type="password" id="senha-login" name="senha" placeholder="Digite sua senha" required /></p><br />
                            <input type="submit" id="entrar" name="fazer-login" value="Entrar" />
                            <!-- <a href="javascript:void(0)" class="register-new-user">Cadastrar usuário</a> -->
                            <a href="<?php echo SITEBASE;?>recuperar.php" class="input-info forgot-password">Esqueceu a senha?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once 'common/scripts.php'; ?>

    </body>

</html>