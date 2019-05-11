<?php include_once 'common.php'; ?>
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
                    <h3>Insira o seu e-mail:</h3>
                    <form id="login-sistema" action="php/usuario/recuperar.php" method="POST">
                        <p class="titulos">Usuário
                            <span class="error-message msg2">(Digite o Email)</span>
                            <input type="text" id="nome" name="usuario" placeholder="Digite seu e-mail ou nome de usuário" /></p><br />
                        <p class="titulos">Senha
                            <span class="error-message msg3">(Digite a senha)</span>
                            <input type="password" id="senha-login" name="senha" placeholder="Digite sua senha" /></p><br />
                        <input type="submit" id="entrar" name="fazer-login" value="Entrar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'common/scripts.php'; ?>
</body>

</html>