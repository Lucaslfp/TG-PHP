<?php

include_once 'common.php'; 
!$_SESSION['logado'] == 'logado' ? header('Location: home.php') : false;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/img/museum-icon.png" />
    <?php include_once 'common/styles.php'; ?>
</head>

<body class="home">
    <?php include_once 'common/header.php'; ?>
    <div class="container">
        <div class="row back">
            <div class="page-content col-md-12">
                <h1>Olá, seja bem-vindo ao Software de Controle de Acervo!</h1>
                <p>Esse software foi desenvolvido para fazer o cadastro e controle de todo o acervo do museu Osvaldo Russomano de Bragança Paulista. Através dele será possível também gerar relatórios e buscar itens no acervo. Foi um trabalho desenvolvido por alunos da Fatec em parceria com a prefeitura de Bragança.</p>
                <p>Em caso de dúvidas, contatar a Fatec de Bragança Paulista.</p>
                <div class="button-fatec">
                    <a href="http://www.fatecbpaulista.edu.br/" target="_blank"><span>Ir para o site da Fatec</span></a>
                </div>
            </div>
            <div class="museu-foto">
                <img src="assets/img/museu1.jpg" alt="imagem 2" />
            </div>
        </div>
    </div>
    <?php include_once 'common/footer.php'; ?>

    <?php include_once 'common/scripts.php'; ?>
</body>
</html>