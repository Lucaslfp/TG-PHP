<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/js/bootstrap.min.js" />
    <link rel="shortcut icon" href="assets/img/museum-icon.png" />
    <title>Cadastro</title>
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
                    <span>Olá, <strong>usuário</strong></span><br/>
                    <a href=""><span class="sair">Sair</span></a>
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
<body class="cadastrar">
    <div class="container">
        <div class="row cad">
            <div class="imagem col-md-12">
                <img src="assets/img/Museu2.jpg" alt="museu1">
            </div>
            <div class="col-md-12">
                <ul class="abas">
                    <li class="obra">Obras</li>
                    <li class="secao">Seção</li>
                    <li class="material">Material</li>
                    <li class="colecao">Coleção</li>
                </ul>
            </div>
            <div class="aba-1 col-md-12" style="display: block;">
                <h3>Cadastro de obra</h3>
                <span class="error-message msg23">Informações não preechidas corretamente</span>
                <form id="cadastro-obra">
                    <label for='codigo' class="titulos">Código<span class="error-message msg16">(Digite um código)</span><input type="text" id="codigo" name="peca-cod" placeholder="Código de Registro" /></label>
                    <label for='titulo' class="titulos">Título<span class="error-message msg17">(Digite um título)</span><input type="text" id="titulo" name="peca-titulo" placeholder="Nome da peça" /></label>
                    <label for='tombo' class="titulos">Tombo<input type="text" id="tombo" name="peca-tombo" placeholder="Tombo da peça" /></label>
                    <label for='altura' class="titulos altura-obra">Dimensões <br /><input type="text" id="altura" name="item-altura" placeholder="Altura" /><input type="text" id="largura" name="item-largura" placeholder="Largura"><input type="text" id="profundidade" name="item-profundidade" placeholder="Profundidade"></label>
                    <label for='historico' class="titulos historico-obra">Histórico/Descrição<textarea cols="100" rows="5" id="historico" placeholder="Histórico da obra"></textarea></label>
                    <label for='cidade-origem' class="titulos">Cidade<input type="text" id="cidade-origem" name="cidade-origem" placeholder="Cidade de origem" /></label>
                    <label for='uf-obra' class="titulos">UF
                        <select id="uf-obra">
                            <option>---</option><option>AC</option><option>AL</option><option>AP</option><option>AM</option>
                            <option>BA</option><option>CE</option><option>DF</option><option>ES</option><option>GO</option>
                            <option>MA</option><option>MT</option><option>MS</option><option>MG</option><option>PA</option>
                            <option>PB</option><option>PR</option><option>PE</option><option>PI</option><option>RJ</option>
                            <option>RN</option><option>RS</option><option>RO</option><option>RR</option><option>SC</option>
                            <option>SP</option><option>SE</option><option>TO</option>
                        </select>
                    </label>
                    <label for='estado-conservacao' class="titulos">Estado<input type="text" id="estado-conservacao" name="item-estado" placeholder="Estado de conservação da obra" /></label><br />
                    <label for='' class="titulos">Data de doação<input type="date" id="data" name="item-data" /></label><br />
                    <label for='' class="titulos">Doador<input type="text" id="doador" name="item-doador" placeholder="Nome e sobrenome do doador" /></label><br />
                    <label for='' class="titulos">Data de entrada<span class="error-message msg18">(Digite uma data de entrada)</span><input type="date" id="entrada" name="item-entr" /></label><br />
                    <label for='' class="titulos">Autor/Artista<span class="error-message msg19">(Digite um autor/artista)</span><input type="text" id="autor" name="item-autor" placeholder="Nome e sobrenome do autor da obra" /></label><br />
                    <label for='' class="titulos">Material<select class="opt-mat">
                        <option>---</option>
                    </select></label><br />
                    <label for='' class="titulos">Técnica<input type="text" id="tecnica" name="item-tec" placeholder="Técnica utilizada" /></label><br />
                    <label for='' class="titulos">Modelo<input type="text" id="modelo" name="item-model" /></label><br />
                    <label for='' class="titulos">Categoria<span class="error-message msg20">(Digite uma categoria)</span><input type="text" id="categoria" name="item-cat" placeholder="Categoria em que o item se encaixa" /></label><br />
                    <label for='' class="titulos">Localização<span class="error-message msg21">(Selecione uma localização)</span><select class="local">
                        <option>---</option>
                    </select></label><br />
                    <label for='' class="titulos">Coleção<span class="error-message msg22">(Selecione uma coleção)</span>
                        <select class="colecao">
                            <option>---</option>
                        </select>
                    </label><br />
                    <label for='' class="titulos">Observações<textarea cols="100" rows="5" placeholder="Espaço para observações"></textarea></label><br />
                    <label for='' class="titulos">Inserir imagem<input type="file" id="imagem" name="item-img" /></label><br />
                    <div class="espace">
                        <div class="area-imagem-1">Espaço para imagem</div>
                    </div>
                    <div class="button">
                        <img src="assets/img/mais.png" alt="plus" id="plus" />
                        <img src="assets/img/menos.png" alt="minus" id="minus" />
                    </div>
                    <br />
                    <input type="submit" id="salvar" name="item-salvar" value="Salvar">
                    <span id="cancelar-2">Cancelar</span>
                </form>
            </div>
            <div class="aba-2 col-md-12">
                <h3>Cadastro de Seção</h3>
                <form id="cadastro-2" action="" method="POST">
                    <label for='' class="titulos">Espaço físico<span class="error-message msg24">(Digite uma seção)</span><input type="text" id="secao-id" name="secao-nome" placeholder="Nome da Seção" /></label>
                    <br />
                    <input type="submit" id="salvar2" name="item-salvar2" value="Salvar">
                    <span id="cancelar-3">Cancelar</span>
                    <div id="sec-cadastradas">
                        <h3>Seções cadastradas</h3>
                        <div class="sec">
                            <span class="icons">
                                <img src="assets/img/icon x.png" alt="x" class="icon-x" />
                                <img src="assets/img/pencil.png" alt="edit" class="pencil" />
                            </span>
                            <span class="itens2"></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="aba-3 col-md-12">
                <h3>Cadastro de Material</h3>
                <form id="cadastro-material" method="POST">
                    <label for='' class="titulos">Material<span class="error-message msg25">(Digite o nome de um material)</span><input type="text" id="material" name="mat-nome" placeholder="Nome do Material" /></label>
                    <br />
                    <input type="submit" id="salvar3" name="item-salvar3" value="Salvar">
                    <span id="cancelar-4">Cancelar</span>
                    <div id="materiais-cadastrados">
                        <h3>Materiais Cadastrados</h3>
                        <div class="material">
                            <span class="icons">
                                <img src="assets/img/icon x.png" alt="x" class="icon-x" />
                                <img src="assets/img/pencil.png" alt="edit" class="pencil" />
                            </span>
                            <span class="itens2"></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="aba-4 col-md-12">
                <h3>Cadastro de Coleção</h3>
                <form id="cadastro-4" action="" method="POST">
                    <label for='' class="titulos">Coleção<span class="error-message msg26">(Digite o nome de uma coleção)</span><input type="text" id="cole" name="cole-nome" placeholder="Nome da Coleção" /></label>
                    <br />
                    <input type="submit" id="salvar4" name="item-salvar3" value="Salvar">
                    <span id="cancelar-5">Cancelar</span>
                    <div id="cole-cadastrados">
                        <h3>Coleções Cadastradas</h3>
                        <div class="collecti">
                            <span class="icons">
                                <img src="assets/img/icon x.png" alt="x" class="icon-x" />
                                <img src="assets/img/pencil.png" alt="edit" class="pencil" />
                            </span>
                            <span class="itens3">Guerra</span>
                        </div>
                    </div>
                </form>
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
                <p>Trabalho realizado pelo grupo: Kevin Cavenatti Bueno, Lucas Ferraz de Lima, Lucas Lima de Faria Pacheco, Rodrigo Gianini do Prado Rodrigues, Thais Porto Mendonça.</label>
                <p>Com a orientação da professora Cristina Becker Navarro.</label>
                <p>Fatec Bragança Paulista - Curso de Gestão em Tecnologia da Informação. 2018-2019</label>
            </div>
            <div class="brasao col-md-2">
                <img src="assets/img/logo-fatec.png" />
            </div>
        </div>
    </div>
</footer>