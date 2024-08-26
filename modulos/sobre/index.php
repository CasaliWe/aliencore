<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/sobre/css/style.css">



<!-- content sobre -->
<section class="bg-dark py-5 d-flex justify-content-center align-items-center flex-column">

    <!--imagem e descrição-->
    <div id="imagem-descricao">
         <img data-aos="fade-up" src="<?= $base_url ?>assets/imagens/capa-show.jpg" class="w-100 my-5" alt="Banda Alien Core">

         <h1 data-aos="fade-up" class="fs-1 text-alien mb-3 text-center">Conheça a banda Alien Core!</h1>

         <p data-aos="fade-up" class="text-secondary text-center">A Alien Core é uma banda fundada em 2022 que captura a essência do rock internacional e a leva para os palcos com uma energia contagiante. Com um repertório que inclui covers de grandes nomes como Kings of Leon, Foo Fighters, Imagine Dragons, Green Day e Nickelback, a banda oferece uma experiência musical rica e diversificada, garantindo performances memoráveis. Além de interpretar clássicos do rock, a Alien Core já lançou dois singles autorais, "Bad Taste in Men" e "This Woman", e está atualmente dedicada à produção do seu próximo lançamento, mantendo o público sempre ansioso pelo que virá a seguir. <br><br> A formação da banda destaca Gui, que, além de assumir os vocais, também comanda o baixo, adicionando uma dinâmica interessante ao som do grupo. Weslei, na bateria, e Jean, na guitarra, completam o conjunto, cada um trazendo seu estilo único e habilidades que enriquecem as performances ao vivo.</p>
    </div>
    <!--imagem e descrição-->


    <div class="_division-sobre"></div>


    <!--integrantes-->
    <div class="w-100">
        <?php include_once  __DIR__ .'/../integrantes/index.php'; ?>
    </div>
    <!--integrantes-->


    <div class="_division-sobre"></div>


    <!--instagram-->
    <section class="bg-dark mt-5 py-5 d-flex flex-column justify-content-center align-items-center">

        <h3 data-aos="fade-up" class="text-alien mb-4">Nosso instagram</h3>

        <iframe data-aos="fade-up" src="https://snapwidget.com/embed/1048498" class="d-none d-lg-block snapwidget-widget mb-5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:555px; height:370px"></iframe>
        <iframe data-aos="fade-up" src="https://snapwidget.com/embed/1048500" class="d-block d-lg-none snapwidget-widget mb-5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:270px; height:270px"></iframe>

        <a data-aos="fade-up" href="https://www.instagram.com/aliencore_rock/" target="_blank" id="btn-ver-nosso-instagram"> <i class="fab fa-instagram me-1"></i> Ver nosso instagram</a>
        
    </section>
    <!--instagram-->

</section>
<!-- content sobre -->