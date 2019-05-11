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
                    <span>Olá, <strong><?php echo $_SESSION['nome']; ?></strong></span><br />
                    <a href="php/logout.php"><span class="sair">Sair</span></a>
                </div>
            </div>
            <div class="navbar col-lg-12 col-md-12">
                <ul>
                    <a href="home.php">
                        <li class="item1">Tela Inicial</li>
                    </a>
                    <a href="cadastro.php">
                        <li class="item2">Cadastro</li>
                    </a>
                    <a href="consulta.php">
                        <li class="item3">Consulta</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</header>