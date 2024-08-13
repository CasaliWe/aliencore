<?php
    include_once __DIR__ . '/../../config/config.php';
    include_once __DIR__ . '/../../config/getUrl.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/footer/css/style.css">



<!--FOOTER-->
<footer class="bg-dark">

    <h1 class="d-none">Footer site banda Alien Core</h1>

    <nav data-aos="fade-up" class="px-5 py-3 w-100 d-none d-lg-flex justify-content-center">
            <div class="align-self-center">
                <a href="index.php" class="<?= $linkAtivoIndex ? $linkAtivoIndex : '' ?> mx-2 _hover-link-nav">INÍCIO</a>
                <a href="galeria.php" class="<?= $linkAtivoGaleria ? $linkAtivoGaleria : '' ?> mx-2 _hover-link-nav">GALERIA</a>
                <a href="sobre.php" class="<?= $linkAtivoSobre ? $linkAtivoSobre : '' ?> mx-2 _hover-link-nav">SOBRE</a>
            </div>

            <a href="index.php" class="align-self-center"><img src="<?= $base_url ?>assets/imagens/logo.png" alt="Logo Alien Core" class="_logo-nav-footer"></a>

            <div class="align-self-center">
                <a href="agenda.php" class="<?= $linkAtivoAgenda ? $linkAtivoAgenda : '' ?> mx-2 _hover-link-nav">AGENDA</a>
                <a href="noticias.php" class="<?= $linkAtivoNoticias ? $linkAtivoNoticias : '' ?> mx-2 _hover-link-nav">NOTÍCIAS</a>
                <a href="#contato" class="mx-2 _hover-link-nav">CONTATO</a>
            </div>
    </nav>

    <div data-aos="fade-up" style="border-bottom: 2px solid gray;" class="mt-1 mb-4 w-75 d-none d-lg-block"></div>


    <p class="text-center">© <?= date('Y') ?> <span class="text-alien">Alien Core</span>. Todos os direitos reservados. <br> Criado por <a href="<?= $freeladev; ?>" target="_blank" style="color: orangered;">FreelaDev Sites</a></p>
      
</footer>
<!--FOOTER-->