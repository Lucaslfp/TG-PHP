<?php
$nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : ''; 
?>
<header>
    <div class="container">
        <div class="row">
            <div class="logo col-md-3">
                <img src="<?php echo SITEBASE; ?>assets/img/logo-fatec.png">
            </div>
            <div class="col-md-6"></div>
            <div class="user col-md-3">
                <div class="user-icon">
                    <?php if ($_SESSION['logado'] == 'logado') { ?>
                        <img src="<?php echo SITEBASE; ?>assets/img/user-icon.png" />
                        <span>Olá, <strong><?php echo $nome; ?></strong></span><br />
                        <a href="<?php echo SITEBASE; ?>php/usuario/funcoes-user.php?param=logout"><span class="sair">Sair</span></a>
                    <?php } else { ?>
                        <a href="<?php echo SITEBASE; ?>login.php"><span class="sair">Entrar</span></a>
                    <?php } ?>
                </div>
            </div>
            <div class="navbar col-lg-12 col-md-12">
                <ul>
                    <a href="<?php echo SITEBASE; ?>home.php">
                        <li class="item1">Tela Inicial</li>
                    </a>
                    <a href="<?php echo SITEBASE; ?>cadastro.php">
                        <li class="item2">Cadastro</li>
                    </a>
                    <a href="<?php echo SITEBASE; ?>consulta.php">
                        <li class="item3">Consulta</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</header>