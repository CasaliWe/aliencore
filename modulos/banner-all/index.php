<?php
    include_once __DIR__ . '/../../config/config.php';
    include_once __DIR__ . '/../../config/getUrl.php';

    if($pagAtual == 'Sobre'){
        $titulo_pagina_banner_all = mb_strtoupper($pagAtual, 'UTF-8');
        $pagina_atual_banner_all = 'sobre.php';
        $banner = $base_url . "assets/imagens/capa-home.jpeg";
    }else if($pagAtual == 'Galeria'){
        $titulo_pagina_banner_all = mb_strtoupper($pagAtual, 'UTF-8');
        $pagina_atual_banner_all = 'galeria.php';
        $banner = $base_url . "assets/imagens/capa-home.jpeg";
    }else if($pagAtual == 'Notícias'){
        $titulo_pagina_banner_all = mb_strtoupper($pagAtual, 'UTF-8');
        $pagina_atual_banner_all = 'noticias.php';
        $banner = $base_url . "assets/imagens/capa-home.jpeg";
    }else if($pagAtual == 'Notícia'){
        $titulo_pagina_banner_all = mb_strtoupper($pagAtual, 'UTF-8');
        $pagina_atual_banner_all = 'noticia.php';
        $banner = $base_url . "assets/imagens/capa-home.jpeg";
    }else if($pagAtual == 'Agenda'){
        $titulo_pagina_banner_all = mb_strtoupper($pagAtual, 'UTF-8');
        $pagina_atual_banner_all = 'agenda.php';
        $banner = $base_url . "assets/imagens/capa-home.jpeg";
    }
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/banner-all/css/style.css">



<!--BANNER ALL-->
<header id="banner-all" style="background-image: url(<?= $banner; ?>);">

        <!-- NAVEGAÇÃO -->
        <?php include_once __DIR__ . '/../../modulos/nav/index.php'; ?>
        <!-- NAVEGAÇÃO -->


        <!--Title página-->
        <div class="title-pagina">
            <h1 class="anima-digitar"><?= $titulo_pagina_banner_all; ?></h1>
            <div>
                <a href="<?= $base_url; ?>">Início</a> | <a href="<?= $base_url; ?><?= $pagina_atual_banner_all; ?>"><?= $pagAtual; ?></a>
            </div>
        </div>
        <!--Title página-->
     
</header>
<!--BANNER ALL-->



<script src="<?= $base_url ?>modulos/banner-all/js/app.js"></script>