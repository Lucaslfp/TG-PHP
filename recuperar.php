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
                <?php if (!isset($_SESSION['autorizado'])) { ?>
                <div class="form-login">
                    <div class="header-form">
                        <img src="assets/img/logo-fatec.png" alt="logo">
                    </div>
                    <h3>Recuperar senha <br /> <br /></h3>
                    <form id="login-sistema" action="php/usuario/funcoes-user.php?param=recuperar" method="POST">
                        <p class="titulos">Insira a resposta da sua pergunta secreta
                            <input type="text" id="nome" name="resposta" placeholder="Digite a Resposta" />
                        </p>
                        <br />
                        <p class="titulos">Insira o seu e-mail abaixo
                            <input type="text" id="nome" name="email" placeholder="Digite seu e-mail" />
                        </p>
                        <br />
                        <input type="submit" id="entrar" name="fazer-login" value="Enviar" />
                        <a href='login.php' id="cancelar">Cancelar</a>
                    </form>
                </div>
                <?php } else { ?>
                <div class="form-login">
                    <div class="header-form">
                        <img src="assets/img/logo-fatec.png" alt="logo">
                    </div>
                    <h3>Recuperar senha <br /> <br /></h3>
                    <form id="login-sistema" action="php/usuario/funcoes-user.php?param=nova-senha" method="POST">
                        <p class="titulos">Insira sua nova senha
                            <input type="text" id="nome" name="senha" placeholder="Digite a Senha" />
                        </p>
                        <br />
                        <p class="titulos">Confirme sua senha
                            <input type="text" id="nome" name="confirmar" placeholder="Confirme sua senha" />
                        </p>
                        <br />
                        <input type="submit" id="entrar" name="fazer-login" value="Enviar" />
                        <a href='login.php' id="cancelar">Cancelar</a>
                    </form>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include_once 'common/scripts.php'; ?>
</body>

</html>