
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="bootstrap-4.2.1-dist/js/bootstrap.min.js" />
        <link rel="shortcut icon" href="assets/img/museum-icon.png" />
        <title>Home</title>
    </head>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-md-3">
                    <img src="assets/img/logo-fatec.png">
                </div>
                <div class="col-md-6"></div>
                <div class="user col-md-3">
                    <div class="user-icon">
                        <img src="assets/img/user-icon.png" />
                        <span>Olá, <strong><?php echo $_SESSION['nome']; ?></strong></span><br/>
                        <a href="php/logout.php"><span class="sair">Sair</span></a>
                    </div>
                </div>
                <div class="navbar col-lg-12 col-md-12">
                    <ul>
                        <a href="home.php"><li class="item1">Tela Inicial</li></a>
                        <a href="cadastro.php"><li class="item2">Cadastro</li></a>
                        <a href="consulta.php"><li class="item3">Consulta</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <body class="home">
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
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
    </body>
    <footer>
            <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css" />
            <link rel="stylesheet" href="footer.css" />
            <div class="container">
                <div class="row">
                    <div class="texto col-md-10">
                        <p>Trabalho realizado pelo grupo: Kevin Cavenatti Bueno, Lucas Ferraz de Lima, Lucas Lima de Faria Pacheco, Rodrigo Gianini do Prado Rodrigues, Thais Porto Mendonça.</p>
                        <p>Com a orientação da professora Cristina Becker Navarro.</p>
                        <p>Fatec Bragança Paulista - Curso de Gestão em Tecnologia da Informação. 2018-2019</p>
                    </div>
                    <div class="brasao col-md-2">
                        <img src="assets/img/logo-fatec.png" />
                    </div>
                </div>
            </div>
        </footer>
</html>