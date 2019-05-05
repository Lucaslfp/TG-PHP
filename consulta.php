<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/js/bootstrap.min.js" />
    <link rel="shortcut icon" href="assets/img/museum-icon.png" />
    <title>Consulta e Relatório</title>
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
                    <img src="imagens/user-icon.png" />
                    <span>Olá, <strong>usuário</strong></span><br/>
                    <a href=""><span class="sair">Sair</span></a>
                </div>
            </div>
            <div class="navbar col-lg-12 col-md-12">
                <ul>
                    <a href="home.html"><li class="item1">Tela Inicial</li></a>
                    <a href="cadastro.html"><li class="item2">Cadastro</li></a>
                    <a href="consulta.html"><li class="item3">Consulta</li></a>
                </ul>
            </div>
        </div>
    </div>
</header>
<body class="consultar">
    <div class="container">
        <div class="row back">
            <div class="col-md-12 cons-imagem">
                <img src="assets/img/museu-4.jpg" alt="museu1" />
            </div>
            <div class="aba-5 col-md-12">
                <h3>Consulta de obras</h3>
                <form id="consulta1" action="" method="POST">
                    <p class="titulos">Objeto<input type="text" id="titul" name="busca-ti" placeholder="Título/nome da obra" /></p><br />
                    <p class="titulos">Código<input type="text" id="regist" name="busca-rg" placeholder="Código de registro da obra" /></p><br />
                    <p class="titulos">Tombo<input type="text" id="tom" name="busca-tombo" placeholder="Tombo da obra" /></p><br />
                    <p class="titulos">Dimensões <br /><input type="text" id="alt" name="busca-alt" placeholder="Altura" /> x <input type="text" id="larg" name="busca-larg" placeholder="Largura"> x <input type="text" id="prof" name="busca-prof" placeholder="Profundidade"></p><br />
                    <p class="titulos">Coleção<input type="text" id="collection" name="busca-col" placeholder="Coleção ao qual pertence" /></p><br />
                    <p class="titulos">Material
                        <select id="mater">
                            <option class="opt5">---</option>
                        </select>
                    </p><br />
                    <p class="titulos">Período inicial<input type="date" id="init" name="busca-init" /></p><p class="titulos">Período final<input type="date" id="fim" name="busca-fim" /></p>
                    <p class="titulos">Categoria<input type="text" id="cat" name="busca-cat" placeholder="Categoria da obra" /></p><br />
                    <p class="titulos">Seção
                        <select id="sect">
                            <option class="opt6">---</option>
                        </select>
                    </p><br />
                    <input type="submit" id="busc" name="item-buscar" value="Buscar">
                    <span id="cancelar-6"><a href="home.php">Cancelar</a></span>
                </form>
            </div>
            <div class="resul col-md-12">
                <h3>Resultado da busca:</h3>
                <div class="image"></div>
                <div class="conteudos">
                    <pre></pre>
                </div>
                <div class="relat">
                    <span>Gerar relatório</span>
                </div>
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