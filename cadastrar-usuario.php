<?php
include_once 'common.php'; 
?>
<html>

    <head>
        <title>Cadastrar Usuário</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php include_once 'common/styles.php'; ?>
        <link rel="shortcut icon" href="assets/img/icon.png" />
    </head>

    <body class="login">
        <div class="container">
            <div class="row">
                <div class="back col-md-12">
                <div class="form-register-user">
                    <div class="header-form">
                        <img src="assets/img/logo-fatec.png" alt="logo">
                    </div>
                    <h3>Cadastrar usuário no sistema:</h3>
                    <form id="register-user" action="php/usuario/funcoes-user.php?param=cadastrar" method="POST">
                        <p class="titulos">Nome<input type="text" id="nome-usuario" name="nome" placeholder="Digite seu nome de usuário" required /></p><br />
                        <p class="titulos">CPF<input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required  /></p><br />
                        <p class="titulos">E-mail<input type="email" id="email-novo-usuario" name="email" placeholder="nome@exemplo.com" /></p><br />
                        <p class="titulos">Data de Nascimento<input type="date" id="data" name="data" placeholder="00/00/0000" required /></p><br />
                        <p class="titulos">CEP<input type="text" id="cep" name="cep" placeholder="Informe o seu CEP" required /></p><br />
                        <p class="titulos">Rua<input type="text" id="rua" name="rua" placeholder="Informe o nome da sua Rua" /></p><br />
                        <p class="titulos">Número<input type="number" id="numero" name="numero" placeholder="Informe o número" /></p><br />
                        <p class="titulos">Bairro<input type="text" id="data" name="bairro" placeholder="Informe o seu bairro" /></p><br />
                        <p class="titulos">Complemento<input type="text" id="complemento" name="complemento" placeholder="Informe o complemento" /></p><br />
                        <p class="titulos">Cidade<input type="text" id="cidade" name="cidade" placeholder="Informe sua cidade" /></p><br />
                        <p class="titulos">Senha<input type="password" id="senha-novo-usuario" name="senha" placeholder="Digite sua senha" required  /></p><br />
                        <p class="titulos">Confirme a senha<input type="password" id="confirma-senha" name="confirma-senha" placeholder="Digite sua senha" required  /></p><br />
                        <p class="titulos">Pergunta secreta<select id="register-options" name="pergunta" required >
                                <option class="opt" name="---">---</option>
                                <option class="opt" name="Nome da mãe" value="Nome da mãe">Nome da mãe</option>
                                <option class="opt" name="Comida favorita" value="Comida favorita">Comida favorita</option>
                                <option class="opt" name="Dia do aniversário" value="Dia do aniversário">Dia do aniversário</option>
                                <option class="opt" name="Escola onde estudou" value="Escola onde estudou">Escola onde estudou</option>
                            </select></p><br />
                        <p class="titulos">Resposta<input type="text" id="nova-resposta-secreta" name="resposta" placeholder="Resposta para a pergunta secreta" required  /></p><br />
                        <p class="titulos">Nível de permissão no sistema<select id="permissao" name="nivel">
                                <option class="opt1"></option>
                                <option class="opt1">Administrador</option>
                                <option class="opt1">Usuário comum</option>
                            </select></p><br />
                        <input type="submit" id="cadastrar" name="fazer-cadastro" value="Cadastrar" />
                        <span id="cancelar">Cancelar</span>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once 'common/scripts.php'; ?>

    </body>

</html>