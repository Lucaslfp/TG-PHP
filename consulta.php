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
            <div class="row background">
                <div class="consulta-imagem">
                    <img src="assets/img/museu-4.jpg" alt="museu1" />
                </div>
                <div class="aba-5 col-md-12">
                    <h3>Consulta de obras</h3>
                    <form id="consultar-obras" action="" method="POST">
                        <label for='' class="titulos">Objeto<input type="text" id="titul" name="busca-ti" placeholder="Título/nome da obra" /></label>
                        <label for='' class="titulos">Código<input type="text" id="regist" name="busca-rg" placeholder="Código de registro da obra" /></label>
                        <label for='' class="titulos">Tombo<input type="text" id="tom" name="busca-tombo" placeholder="Tombo da obra" /></label>
                        <label for='' class="titulos dimensoes-obra">Dimensões <br /> 
                            <input type="text" id="altura" name="busca-altura" placeholder="Altura" /> 
                            <input type="text" id="largura" class="margin-vertical" name="busca-largura" placeholder="Largura" /> 
                            <input type="text" id="profundidade" name="busca-profundidade" placeholder="Profundidade" />
                        </label>
                        <label for='' class="titulos">Coleção<input type="text" id="collection" name="busca-col" placeholder="Coleção ao qual pertence" /></label>
                        <label for='' class="titulos">Material
                            <select id="mater">
                                <option class="opt5">---</option>
                            </select>
                        </label>
                        <label for='' class="titulos">Período inicial<input type="date" id="init" name="busca-init" /></label>
                        <label for='' class="titulos">Período final<input type="date" id="fim" name="busca-fim" /></label>
                        <label for='' class="titulos">Categoria<input type="text" id="cat" name="busca-cat" placeholder="Categoria da obra" /></label>
                        <label for='' class="titulos">Seção
                            <select id="sect">
                                <option class="opt6">---</option>
                            </select>
                        </label>
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