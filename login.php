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
                    <h3>Entrar no sistema:</h3>
                    <span class="error-message msg1">Usuário e/ou senha inválidos.</span>
                    <form id="login-sistema" action="php/entrar_sistema.php" method="POST">
                        <p class="titulos">Usuário
                            <span class="error-message msg2">(Digite o Email)</span>
                            <input type="text" id="nome" name="usuario" placeholder="Digite seu e-mail ou nome de usuário" /></p><br />
                        <p class="titulos">Senha
                            <span class="error-message msg3">(Digite a senha)</span>
                            <input type="password" id="senha-login" name="senha" placeholder="Digite sua senha" /></p><br />
                        <input type="submit" id="entrar" name="fazer-login" value="Entrar" />
                        <a href="javascript:void(0)" class="register-new-user">Cadastrar usuário</a>
                        <a href="javascript:void(0)" class="forgot-password">Esqueceu a senha?</a>
                    </form>
                </div>
                <div class="form-register-user">
                    <div class="header-form">
                        <img src="assets/img/logo-fatec.png" alt="logo">
                    </div>
                    <h3>Cadastrar usuário no sistema:</h3>
                    <span class="error-message msg4">Informações não preenchidas corretamente</span>
                    <form id="register-user" action="" method="POST">
                        <p class="titulos">Nome<span class="error-message msg5">(Digite um nome)</span><input type="text" id="nome-usuario" name="name-bar" placeholder="Digite seu nome de usuário" /></p><br />
                        <p class="titulos">E-mail<span class="error-message msg6">(Digite um email)</span><input type="email" id="email-novo-usuario" name="email-user" placeholder="nome@exemplo.com" /></p><br />
                        <p class="titulos">Senha<span class="error-message msg7">(Digite uma senha)</span><input type="password" id="senha-novo-usuario" name="senha" placeholder="Digite sua senha" /></p><br />
                        <p class="titulos">Confirme a senha<span class="error-message msg8">(As senhas não correspondem)</span><input type="password" id="confirma-senha" name="senha" placeholder="Digite sua senha" /></p><br />
                        <p class="titulos">Pergunta secreta<span class="error-message msg9">(Selecione uma opção)</span><select id="register-options" name="pergunta">
                                <option class="opt" name="---">---</option>
                                <option class="opt" name="Nome da mãe">Nome da mãe</option>
                                <option class="opt" name="Comida favorita">Comida favorita</option>
                                <option class="opt" name="Dia do aniversário">Dia do aniversário</option>
                                <option class="opt" name="Escola onde estudou">Escola onde estudou</option>
                            </select></p><br />
                        <p class="titulos">Resposta<span class="error-message msg10">(Escreva uma resposta)</span><input type="text" id="nova-resposta-secreta" name="resposta" placeholder="Resposta para a pergunta secreta" /></p><br />
                        <p class="titulos">Nível de permissão no sistema<span class="error-message msg11">(Selecione uma opção)</span><select id="permissao" name="nivel">
                                <option class="opt1"></option>
                                <option class="opt1">Administrador</option>
                                <option class="opt1">Usuário comum</option>
                            </select></p><br />
                        <input type="submit" id="cadastrar" name="fazer-cadastro" value="Cadastrar" />
                        <span id="cancelar">Cancelar</span>
                    </form>
                </div>
                <div class="form-forgot-password">
                    <div class="header-form">
                        <img src="assets/img/logo-fatec.png" alt="logo">
                    </div>
                    <h3>Trocar senha:</h3>
                    <span class="error-message msg12">Informações não preenchidas corretamente</span>
                    <form id="senha-sistema" action="" method="POST">
                        <p class="titulos">E-mail<span class="error-message msg13">(Digite um e-mail)</span><input type="email" id="email-usuario" name="email-user" placeholder="nome@exemplo.com" /></p><br />
                        <p class="titulos">Pergunta secreta<span class="error-message msg14">(Selecione uma opção)</span><select id="select-options" name="pergunta">
                                <option>---</option>
                                <option>Nome da mãe</option>
                                <option>Comida favorita</option>
                                <option>Dia do aniversário</option>
                                <option>Escola onde estudou</option>
                            </select></p><br />
                        <p class="titulos">Resposta<span class="error-message msg15">(Digite uma resposta)</span><input type="text" id="resposta-secreta" name="resposta" placeholder="Resposta para a pergunta secreta" /></p><br />
                        <input type="submit" id="recuperar-senha" name="fazer-login" value="Trocar senha" />
                        <a href="javascript:void(0)"><span id="cancelar">Cancelar</span></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'common/scripts.php'; ?>
</body>

</html>