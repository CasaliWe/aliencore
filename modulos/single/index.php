<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/single/css/style.css">



<!--SINGLE-->
<section id="single" style="background-image: url(<?= $base_url; ?>assets/imagens/capa-container-single-2.jpg);">

    <p class='text-center text-alien'>LANÇAMENTO</p>

    <h3 class='text-center text-white mb-5' style="margin-top: -5px;">Single "THIS WOMAN"</h3>

    <img id="alien-face" src="<?= $base_url; ?>assets/imagens/favicon.png" class="d-none d-lg-block">

    <div style="background-image: url(<?= $base_url; ?>assets/imagens/this-woman.jpeg);" id="container-capa-single" onmouseenter="mostrarIconsStream()" onmouseleave="esconderIconsStream()">
         <div id="container-icons-stream">
                <a href="https://open.spotify.com/intl-pt/album/4EGdGkdD7prYimFmcyLip8?go=1&nd=1&dlsi=474074673e444556" class="_ativar-opacidade text-decoration-none mx-2 fs-2" target="_blank"> <i class="fab fa-spotify text-alien"></i> </a>
                <a href="https://music.youtube.com/playlist?list=OLAK5uy_kcwcjBdX7zpWhwbn7rZ_Z8GKtk157wH1E" class="_ativar-opacidade text-decoration-none mx-2 fs-2" target="_blank"> <i class="fab fa-youtube text-danger"></i> </a>
         </div>
    </div>
      
</section>
<!--SINGLE-->


<script src="<?= $base_url ?>modulos/single/js/app.js"></script>