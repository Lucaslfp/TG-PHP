<?php include_once 'common.php'; ?>
<html>

    <head>
        <title>Consulta e Relatório</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="assets/img/museum-icon.png" />
        <?php include_once 'common/styles.php'; ?>
    </head>

    <body class="consultar">
        <?php include_once 'common/header.php'; ?>
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
                        <p class="titulos">Período inicial<input type="date" id="init" name="busca-init" /></p>
                        <p class="titulos">Período final<input type="date" id="fim" name="busca-fim" /></p>
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
        <?php include_once 'common/footer.php'; ?>

        <?php include_once 'common/scripts.php'; ?>
    </body>

</html>