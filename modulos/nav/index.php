<?php
    include_once __DIR__ . '/../../config/config.php';
    include_once __DIR__ . '/../../config/getUrl.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/nav/css/style.css">


<!--MENU MOBILE-->
<div id="menu-mobile" class="bg-dark">

    <h1 class="d-none">Menu mobile</h1>

    <a href="index.php" class="mx-2 <?= $linkAtivoIndex ? $linkAtivoIndex : '' ?>">INÍCIO</a>
    <a href="galeria.php" class="mx-2 <?= $linkAtivoGaleria ? $linkAtivoGaleria : '' ?>">GALERIA</a>
    <a href="sobre.php" class="mx-2" <?= $linkAtivoSobre ? $linkAtivoSobre : '' ?>>SOBRE</a>
    <a href="agenda.php" class="mx-2" <?= $linkAtivoAgenda ? $linkAtivoAgenda : '' ?>>AGENDA</a>
    <a href="noticias.php" class="mx-2 <?= $linkAtivoNoticias ? $linkAtivoNoticias : '' ?>">NOTÍCIAS</a>
    <a href="#contato" class="mx-2" onclick="abrirMenuMobile(this, '_toggler')">CONTATO</a>

    <div class="mt-5 pt-3 pb-5 mb-4 w-100 text-center">
         <a href="https://www.instagram.com/aliencore_rock/" target="_blank" class="mx-2"><i class="fab fa-instagram display-2"></i></a>
         <a href="https://www.facebook.com/aliencorerock" target="_blank" class="mx-2"><i class="fab fa-facebook display-2"></i></a>
    </div>
       
</div>
<!--MENU MOBILE-->



<nav class="_nav-desk-home p-4 p-xxl-5 w-100 d-flex justify-content-between justify-content-lg-center">
        <div class="align-self-center d-none d-lg-block">
            <a href="index.php" class="<?= $linkAtivoIndex ? $linkAtivoIndex : '' ?> mx-2 _hover-link-nav">INÍCIO</a>
            <a href="galeria.php" class="<?= $linkAtivoGaleria ? $linkAtivoGaleria : '' ?> mx-2 _hover-link-nav">GALERIA</a>
            <a href="sobre.php" class="<?= $linkAtivoSobre ? $linkAtivoSobre : '' ?> mx-2 _hover-link-nav">SOBRE</a>
        </div>

        <a href="index.php" class="align-self-center"><img src="<?= $base_url; ?>assets/imagens/logo.png" alt="Logo Alien Core" class="_logo-nav-desktop"></a>

        <div class="align-self-center d-none d-lg-block">
            <a href="agenda.php" class="<?= $linkAtivoAgenda ? $linkAtivoAgenda : '' ?> mx-2 _hover-link-nav">AGENDA</a>
            <a href="noticias.php" class="<?= $linkAtivoNoticias ? $linkAtivoNoticias : '' ?> mx-2 _hover-link-nav">NOTÍCIAS</a>
            <a href="#contato" class="mx-2 _hover-link-nav">CONTATO</a>
        </div>

        <!--Toggler mobile-->
        <button class="_toggler d-block d-lg-none" onclick="abrirMenuMobile(this)"><i class="fas fa-bars"></i></button>
        <!--Toggler mobile-->
</nav>


<script src="<?= $base_url ?>modulos/nav/js/app.js"></script>