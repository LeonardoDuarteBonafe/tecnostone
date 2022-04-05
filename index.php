<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <link rel="stylesheet" type="text/css" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>

    <link rel="icon" href="">
    <title>Tecno Stone</title>

    <body>
        <header>
            <nav>
                <a class="logo" href="index.php">
                    <img src="Images/Index/Navbar/logo.webp"></a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#nossas-solucoes">SOLUÇÕES</a></li>
                    <li><a href="#acabamentos">ACABAMENTO</a></li>
                    <li><a href="#obras-realizadas">OBRAS REALIZADAS</a></li>
                </ul>
            </nav>
        </header>

        <section class="sobre-nos">
            <div class="box conteudo">
                <img src="Images/Index/Sobre-Nos/sobre-nos.webp">
                <p>Atuamos com fornecimento de produtos em Mármores e Granitos com envio facilitado para todo Brasil.</p>
                <div class="imagens">
                    <div class="image" id="banner1">
                        <img src="Images/Index/Sobre-Nos/imagem1.webp">
                    </div>
                    <div class="image" id="banner2">
                        <img src="Images/Index/Sobre-Nos/imagem2.webp">
                    </div>
                    <div class="image" id="banner3">
                        <img src="Images/Index/Sobre-Nos/imagem3.webp">
                    </div>
                    <div class="image" id="banner4">
                        <img src="Images/Index/Sobre-Nos/imagem4.webp">
                    </div>
                    <div class="image" id="banner5">
                        <img src="Images/Index/Sobre-Nos/imagem5.webp">
                    </div>
                    <div class="image" id="banner6">
                        <img src="Images/Index/Sobre-Nos/imagem6.webp">
                    </div>
                </div>
            </div>
            <div class="box imagens">
                <div class="bloco-verde"></div>
                <div class="bloco-azul"></div>
                <div class="bloco-imagem">
                    <!--<img class ="active" src="Images/Index/Sobre-Nos/banner1.webp" id="banner1">
<img src="Images/Index/Sobre-Nos/banner2.webp" id="banner2">
<img src="Images/Index/Sobre-Nos/banner3.webp" id="banner3">-->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="background-image: url('Images/Index/Sobre-Nos/banner1.webp');">
                                <!--<img class="d-block w-100" src="Images/Index/Sobre-Nos/banner1.webp" alt="First slide">-->
                            </div>
                            <div class="carousel-item" style="background-image: url('Images/Index/Sobre-Nos/banner2.webp');">
                                <!--<img class="d-block w-100" src="Images/Index/Sobre-Nos/banner2.webp" alt="Second slide">-->
                            </div>
                            <div class="carousel-item" style="background-image: url('Images/Index/Sobre-Nos/banner3.webp');">
                                <!--<img class="d-block w-100" src="Images/Index/Sobre-Nos/banner3.webp" alt="Third slide">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="social-media">
            <div>
                <img src="Images/Index/Social-Media/logo-instagram.webp">
                <img src="Images/Index/Social-Media/logo-facebook.webp">
                <img class="whatsapp" src="Images/Index/Social-Media/logo-whatsapp.webp">
            </div>

        </section>

        <section class="nossas-solucoes galeria" id="nossas-solucoes">
            <div class="titulo">
                <img src="Images/Index/logo-titulo.webp">
                <h1>Nossas soluções</h1>
            </div>
            <div class="conteudo">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem1.webp">
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem2.webp">
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem3.webp">
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem4.webp">
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem5.webp"> 
                        </div>

                        <!--o numero de imagens precisam ser pares, por isso estão sendo repetidas-->
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem1.webp">
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem2.webp">
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem3.webp">
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem4.webp">
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/Index/Nossas-Solucoes/imagem5.webp"> 
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="texto">
                    <p>
                        Nossos principais produtos são ladrilhos padronizados ou sob medida, fornecemos também peças para revestimento de fachadas, assim como peitoris, soleiras, bancadas e chapas.
                    </p>
                </div>
            </div>
        </section>

        <section class="cores">
            <div class="titulo">
                <img src="Images/Index/logo-titulo.webp">
                <h1>Cores</h1>
            </div>
            <div class="info">
                <div class="painel">
                    <h1>Amarelo Arabesco</h1>
                    <img src="Images/Index/Cores/Amarelo-Arabesco.webp">
                    <img src="Images/Index/Cores/base.webp">
                </div>
                <div class="opcoes-cores">
                    <div id="Amarelo-Arabesco" product-name="Amarelo Arabesco">
                        <img src="Images/Index/Cores/Amarelo-Arabesco.webp">
                    </div>
                    <div id="Amarelo-Fiorito" product-name="Amarelo Fiorito">
                        <img src="Images/Index/Cores/Amarelo-Fiorito.webp">
                    </div>
                    <div id="Amarelo-Icarai" product-name="Amarelo Icarai">
                        <img src="Images/Index/Cores/Amarelo-Icarai.webp">
                    </div>
                    <div id="Amarelo-Maracuja" product-name="Amarelo Maracuja">
                        <img src="Images/Index/Cores/Amarelo-Maracuja.webp">
                    </div>
                    <div id="Amarelo-Ornamental" product-name="Amarelo Ornamental">
                        <img src="Images/Index/Cores/Amarelo-Ornamental.webp">
                    </div>
                    <div id="Amarelo-St-Cecilia" product-name="Amarelo St Cecilia">
                        <img src="Images/Index/Cores/Amarelo-St-Cecilia.webp">
                    </div>
                    <div id="Antartic-White" product-name="Antartic White">
                        <img src="Images/Index/Cores/Antartic-White.webp">
                    </div>
                    <!--<div id="Bege-Antartic" product-name="Bege Antartic">
                        <img src="Images/Index/Cores/Bege-Antartic.webp">
                    </div>-->
                    <div id="Bege-Bahia" product-name="Bege Bahia">
                        <img src="Images/Index/Cores/Bege-Bahia.webp">
                    </div>
                    <div id="Branco-Aquamarine" product-name="Branco Aquamarine">
                        <img src="Images/Index/Cores/Branco-Aquamarine.webp">
                    </div>
                    <div id="Branco-Dallas" product-name="Branco Dallas">
                        <img src="Images/Index/Cores/Branco-Dallas.webp">
                    </div>
                    <div id="Branco-Fortaleza" product-name="Branco Fortaleza">
                        <img src="Images/Index/Cores/Branco-Fortaleza.webp">
                    </div>
                    <div id="Branco-Itaunas" product-name="Branco Itaunas">
                        <img src="Images/Index/Cores/Branco-Itaunas.webp">
                    </div>
                    <div id="Branco-Kashmir" product-name="Branco Kashmir">
                        <img src="Images/Index/Cores/Branco-Kashmir.webp">
                    </div>
                    <div id="Branco-Marfin" product-name="Branco Marfin">
                        <img src="Images/Index/Cores/Branco-Marfin.webp">
                    </div>
                    <div id="Branco-Siena" product-name="Branco Siena">
                        <img src="Images/Index/Cores/Branco-Siena.webp">
                    </div>
                    <div id="Cafe-Imperial" product-name="Cafe Imperial">
                        <img src="Images/Index/Cores/Cafe-Imperial.webp">
                    </div>
                    <div id="Cinza-Andorinha" product-name="Cinza Andorinha">
                        <img src="Images/Index/Cores/Cinza-Andorinha.webp">
                    </div>
                    <div id="Cinza-Castelo" product-name="Cinza Castelo">
                        <img src="Images/Index/Cores/Cinza-Castelo.webp">
                    </div>
                    <div id="Cinza-Corumba" product-name="Cinza Corumba">
                        <img src="Images/Index/Cores/Cinza-Corumba.webp">
                    </div>
                    <div id="Cinza-Nobre" product-name="Cinza Nobre">
                        <img src="Images/Index/Cores/Cinza-Nobre.webp">
                    </div>
                    <div id="Ocre" product-name="Ocre">
                        <img src="Images/Index/Cores/Ocre.webp">
                    </div>
                    <div id="Preto-Blue-Night" product-name="Preto Blue Night">
                        <img src="Images/Index/Cores/Preto-Blue-Night.webp">
                    </div>
                    <div id="Preto-Brasil" product-name="Preto Brasil">
                        <img src="Images/Index/Cores/Preto-Brasil.webp">
                    </div>
                    <div id="Preto-Indiano" product-name="Preto Indiano">
                        <img src="Images/Index/Cores/Preto-Indiano.webp">
                    </div>
                    <div id="Preto-Sao-Gabriel" product-name="Preto Sao Gabriel">
                        <img src="Images/Index/Cores/Preto-Sao-Gabriel.webp">
                    </div>
                    <div id="Verde-Perola" product-name="Verde Perola">
                        <img src="Images/Index/Cores/Verde-Perola.webp">
                    </div>
                    <div id="Verde-Ubatuba" product-name="Verde Ubatuba">
                        <img src="Images/Index/Cores/Verde-Ubatuba.webp">
                    </div>
                    <div id="Via-Lactea" product-name="Via Lactea">
                        <img src="Images/Index/Cores/Via-Lactea.webp">
                    </div>
                    <div id="Vermelho-Brasilia" product-name="Vermelho Brasilia">
                        <img src="Images/Index/Cores/Vermelho-Brasilia.webp">
                    </div>
                </div>
            </div>
        </section>

        <section class="acabamentos galeria" id="acabamentos">
            <div class="titulo">
                <img src="Images/Index/logo-titulo.webp">
                <h1>Acabamentos</h1>
            </div>
            <div class="conteudo">
                <div class="imagens">
                    <div class="box">
                        <div>
                            <a href="Images/Index/Acabamentos/imagem1.webp" data-lightbox="galeriaAcabamentos1" data-title="ESCOVADO">
                                <img src="Images/Index/Acabamentos/imagem1.webp">
                            </a>
                        </div>
                        <p>escovado</p>
                    </div>
                    <div class="box">
                        <div>
                            <a href="Images/Index/Acabamentos/imagem2.webp" data-lightbox="galeriaAcabamentos2" data-title="FLAMEADO">
                                <img src="Images/Index/Acabamentos/imagem2.webp">
                            </a>
                        </div>
                        <p>flameado</p>
                    </div>
                    <div class="box">
                        <div>
                            <a href="Images/Index/Acabamentos/imagem3.webp" data-lightbox="galeriaAcabamentos3" data-title="JATEADO">
                                <img src="Images/Index/Acabamentos/imagem3.webp">
                            </a>
                        </div>
                        <p>jateado</p>
                    </div>
                    <div class="box">
                        <div>
                            <a href="Images/Index/Acabamentos/imagem4.webp" data-lightbox="galeriaAcabamentos4" data-title="POLIDO">
                                <img src="Images/Index/Acabamentos/imagem4.webp">
                            </a>
                        </div>
                        <p>polido</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="obras-realizadas galeria" id="obras-realizadas">
            <div class="titulo">
                <img src="Images/Index/logo-titulo.webp">
                <h1>Obras realizadas</h1>
            </div>
            <div class="conteudo">
                <div class="imagens">
                    <div class="box">
                        <a href="Images/Index/Obras-Realizadas/Galeria1/imagem1.webp" data-lightbox="galeria1" data-title="">
                            <img src="Images/Index/Obras-Realizadas/Galeria1/imagem1.webp">
                        </a>
                        <a href="Images/Index/Obras-Realizadas/Galeria1/imagem2.webp" data-lightbox="galeria1" data-title="">
                        </a>
                        <a href="Images/Index/Obras-Realizadas/Galeria1/imagem3.webp" data-lightbox="galeria1" data-title="">
                        </a>
                        <a href="Images/Index/Obras-Realizadas/Galeria1/imagem4.webp" data-lightbox="galeria1" data-title="">
                        </a>
                    </div>
                    <div class="box">
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem1.webp" data-lightbox="galeria2" data-title="">
                            <img src="Images/Index/Obras-Realizadas/Galeria2/imagem1.webp">
                        </a>
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem2.webp" data-lightbox="galeria2" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem3.webp" data-lightbox="galeria2" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem4.webp" data-lightbox="galeria2" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem5.webp" data-lightbox="galeria2" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem6.webp" data-lightbox="galeria2" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem7.webp" data-lightbox="galeria2" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem8.webp" data-lightbox="galeria2" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria2/imagem9.webp" data-lightbox="galeria2" data-title="">
                        </a> 
                    </div>
                    <div class="box">
                        <a href="Images/Index/Obras-Realizadas/Galeria3/imagem1.webp" data-lightbox="galeria3" data-title="">
                            <img src="Images/Index/Obras-Realizadas/Galeria3/imagem1.webp">
                        </a>
                        <a href="Images/Index/Obras-Realizadas/Galeria3/imagem2.webp" data-lightbox="galeria3" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria3/imagem4.webp" data-lightbox="galeria3" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria3/imagem5.webp" data-lightbox="galeria3" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria3/imagem7.webp" data-lightbox="galeria3" data-title="">
                        </a>
                        <a href="Images/Index/Obras-Realizadas/Galeria3/imagem9.webp" data-lightbox="galeria3" data-title="">
                        </a>
                        <a href="Images/Index/Obras-Realizadas/Galeria3/imagem10.webp" data-lightbox="galeria3" data-title="">
                        </a>
                    </div>
                    <div class="box">
                        <a href="Images/Index/Obras-Realizadas/Galeria4/imagem1.webp" data-lightbox="galeria4" data-title="">
                            <img src="Images/Index/Obras-Realizadas/Galeria4/imagem1.webp">
                        </a>
                        <a href="Images/Index/Obras-Realizadas/Galeria4/imagem2.webp" data-lightbox="galeria4" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria4/imagem3.webp" data-lightbox="galeria4" data-title="">
                        </a> 
                        <a href="Images/Index/Obras-Realizadas/Galeria4/imagem4.webp" data-lightbox="galeria4" data-title="">
                        </a> 
                    </div> 
                </div>
            </div>
        </section>
        <section class="informacao visao">
            <h1>visão</h1>
            <p>
                Ser referência no fornecimento de Rochas Ornamentais para construção civil no território nacional.
            </p>
        </section>

        <section class="informacao missao">
            <h1>missão</h1>
            <p>
                Entregar os melhores produtos, para qualquer destino, dentro do menor prazo possível. 
                Entendemos que cada projeto é único e exige atenção específica, portanto; nos importa atender com excelência as especificações de cada projeto, apresentando soluções adequadas as demandas requeridas pelo cliente. 
            </p>
        </section>

        <section class="informacao valores">
            <h1>valores e diferenciais</h1>
            <p>
                Honestidade, compromisso e determinação.
                Temos o cuidado de oferecer apenas produtos de qualidade e em conformidade com as especificações de projeto.
                Para evitarmos incongruências, trabalhamos em sintonia com os responsáveis pela execução dos projetos. Um diferencial que se traduz em economia de tempo e dinheiro.
                Além da comunicação, um grande diferencial é que, acompanhamos todo processo de fabricação, prevenindo assim, inconformidades, de modo atender o compromisso firmado com o cliente.
                Peça seu orçamento. Após uma análise técnica e aprofundada, ofereceremos a melhor proposta!
            </p>
        </section>

        <section class="contato row d-flex justify-content-center" id="contato">
            <div class="col-12 col-md-8">
                <h1>FORMULÁRIO DE CONTATO</h1>
                <div class="form row d-flex">
                    <div class="info col-12 col-md-6">
                        <input class= "form-text form-nome" type="text" name="nome" id="nome" placeholder="Nome">
                        <input class= "form-text form-email" type="text" name="email" id="email" placeholder="Email">
                        <input class= "form-text" type="text" name="telefone" id="telefone" placeholder="Telefone">
                        <input class= "form-text" type="text" name="setor" id="setor" placeholder="Setor">
                    </div>
                    <div class="mensagem col-12 col-md-6">
                        <textarea class= "form-text" type="text" name="mensagem" id="mensagem" placeholder="Mensagem" rows="5"></textarea>
                    </div>
                    <div class="col-12 btn-form">
                        <button class="buttonEmail" type="button">Enviar</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <h1>CONTATO</h1>
                <div>
                    <p>
                    </p>
                </div>
                <div class="info">
                    <section>
                        <img src="Images/Index/Form/email.webp">
                        <p>
                            thiago@tecnostone.com.br 
                        </p>
                    </section>
                    <section>
                        <img src="Images/Index/Form/telefone.webp">
                        <p>
                            +55 28 99885-5718
                        </p>
                    </section>
                </div>
            </div>
        </section>

        <footer>
            <img src="Images/Index/logo-footer.webp">
        </footer>
    </body>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>