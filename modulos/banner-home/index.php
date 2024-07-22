<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/banner-home/css/style.css">



<!--BANNER INICIAL / NAVEGAÇÃO DESKTOP-->
<header style="background-image: url(<?= $base_url ?>assets/imagens/capa-home.jpeg);" class="_header-home w-100 contianer-fluid bg-dark d-flex flex-column justify-content-center align-items-center">


    <?php include_once __DIR__ . '/../../modulos/nav/index.php'; ?>


    <div class="w-100">
           <h1 class="_titulo-inicio text-center">Explorando os Limites do Rock <br> com a <span class="text-alien">Alien Core</span></h1>

           <div class="_divisao-inicio"></div>

           <h2 class="_sub-inicio text-center mt-4 fw-normal">O MELHOR DO ROCK INTERNACIONAL</h2>

           <div class="mt-5 d-flex justify-content-center"><a href="sobre.php" class="_btn-alien _btn-inicio mx-auto"><i class="fas fa-info-circle me-2"></i> CONHEÇA A BANDA</a></div>
    </div>


    <div class="_icons-inicio text-center">
         <a href="https://www.instagram.com/aliencore_rock/" target="_blank" class="mx-2"><i class="fab fa-instagram"></i></a>
         <a href="https://www.facebook.com/aliencorerock" target="_blank" class="mx-2"><i class="fab fa-facebook"></i></a>
         <a href="mailto:aliencorerock@gmail.com" class="mx-2"><i class="fas fa-envelope"></i></a>
    </div>
      
</header>
<!--BANNER INICIAL / NAVEGAÇÃO DESKTOP-->