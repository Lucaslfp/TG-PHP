<?php
include_once './../../common.php';
include_once './../banco.php';

if (isset($_SESSION)) {
    if ($_SESSION['logado'] != 'logado')
        header('Location: login.php');
}

$id = '';

if (count($_GET) > 0) {
    $id = $_GET['id'];
}

else {
    $id = $_SESSION['id'];
}

$l = $pdo->query("SELECT * FROM usuario WHERE cpf = '{$id}'");

$listar = $l->fetch();

?>
<html>

    <head>
        <title>Cadastrar Usuário</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php include_once './../../common/styles.php'; ?>
        <link rel="shortcut icon" href="./../../assets/img/icon.png" />
    </head>

    <body class="login">
        <div class="container">
            <div class="row">
                <div class="back col-md-12">
                <div class="form-register-user">
                    <div class="header-form">
                        <img src="./../../assets/img/logo-fatec.png" alt="logo">
                    </div>
                    <h3>Atualização dos dados no sistema</h3>
                    <form id="register-user" action="./funcoes-user.php?param=editar&id=<?php echo $id; ?>" method="POST">
                        <p class="titulos">Nome<input type="text" id="nome-usuario" name="nome" value="<?php echo $listar['nome']; ?>" required /></p><br />
                        <p class="titulos">CPF<input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" value="<?php echo $listar['cpf']; ?>" readonly  /></p><br />
                        <p class="titulos">E-mail<input type="email" id="email-novo-usuario" name="email" placeholder="nome@exemplo.com" value="<?php echo $listar['email']; ?>" /></p><br />
                        <p class="titulos">Data de Nascimento<input type="date" id="data" name="data" placeholder="00/00/0000" required value="<?php echo $listar['data_nascimento']; ?>" /></p><br />
                        <p class="titulos">CEP<input type="text" id="cep" name="cep" placeholder="Informe o seu CEP" required value="<?php echo $listar['cep']; ?>" /></p><br />
                        <p class="titulos">Rua<input type="text" id="rua" name="rua" placeholder="Informe o nome da sua Rua" value="<?php echo $listar['rua']; ?>" /></p><br />
                        <p class="titulos">Número<input type="number" id="numero" name="numero" placeholder="Informe o número" value="<?php echo $listar['numero']; ?>" /></p><br />
                        <p class="titulos">Bairro<input type="text" id="data" name="bairro" placeholder="Informe o seu bairro" value="<?php echo $listar['bairro']; ?>" /></p><br />
                        <p class="titulos">Complemento<input type="text" id="complemento" name="complemento" placeholder="Informe o complemento" value="<?php echo $listar['complemento']; ?>" /></p><br />
                        <p class="titulos">Cidade<input type="text" id="cidade" name="cidade" placeholder="Informe sua cidade" value="<?php echo $listar['cidade']; ?>" /></p><br />
                        <p class="titulos">Senha (Sua senha atual: <?php echo $listar['senha']; ?>)<input type="password" id="senha-novo-usuario" name="senha" placeholder="Digite sua senha" required value="<?php echo $listar['senha']; ?>"   /></p><br />
                        <p class="titulos">Confirme a senha<input type="password" id="confirma-senha" name="confirma-senha" placeholder="Digite sua senha" required value="<?php echo $listar['senha']; ?>" /></p><br />
                        <p class="titulos">Pergunta secreta<select id="register-options" name="pergunta" required >
                                <option value="<?php echo $listar['pergunta']; ?>"><?php echo $listar['pergunta']; ?></option>
                                <option class="opt"></option>
                                <option class="opt" name="Nome da mãe" value="Nome da mãe">Nome da mãe</option>
                                <option class="opt" name="Comida favorita" value="Comida favorita">Comida favorita</option>
                                <option class="opt" name="Dia do aniversário" value="Dia do aniversário">Dia do aniversário</option>
                                <option class="opt" name="Escola onde estudou" value="Escola onde estudou">Escola onde estudou</option>
                            </select></p><br />
                        <p class="titulos">Resposta<input type="text" id="nova-resposta-secreta" name="resposta" placeholder="Resposta para a pergunta secreta" required  value="<?php echo $listar['resposta']; ?>" /></p><br />
                        
                        <?php 
                        if ($_SESSION['nivel'] == 'Administrador') {
                        ?>
                        <p class="titulos">Nível de permissão no sistema<select id="permissao" name="nivel">
                                <option class="opt1" value="<?php echo $listar['tipo']; ?>"><?php echo $listar['tipo']; ?></option>
                                <option class="opt"></option>
                                <option class="opt1" value="Administrador">Administrador</option>
                                <option class="opt1" value="Usuario Comum">Usuário comum</option>
                            </select></p><br />
                        <?php } ?>
                        <input type="submit" id="cadastrar" name="fazer-cadastro" value="Atualizar" />
                        <a href="<?php echo SITEBASE; ?>" id="cancelar">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './../../common/scripts.php'; ?>

    </body>

</html>