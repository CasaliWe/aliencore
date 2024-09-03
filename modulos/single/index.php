<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/single/css/style.css">



<!--SINGLE-->
<section id="single" style="background-image: url(<?= $base_url ?>admin/assets/imagens/arquivos/banners/<?= $dados['banners'][0]['banner_lancamento_desktop']; ?>);">

    <p class='text-center text-alien'>LANÇAMENTO</p>

    <h3 class='text-center text-white mb-5' style="margin-top: -5px;">Single "<?= $dados['lancamento'][0]['titulo']; ?>"</h3>

    <img id="alien-face" src="<?= $base_url; ?>assets/imagens/favicon.png" class="d-none d-lg-block">

    <div style="background-image: url(<?= $base_url; ?>admin/assets/imagens/arquivos/lancamento/<?= $dados['lancamento'][0]['imagem']; ?>);" id="container-capa-single" onmouseenter="mostrarIconsStream()" onmouseleave="esconderIconsStream()">
         <div id="container-icons-stream">
                <a href="<?= $dados['lancamento'][0]['link']; ?>" class="_ativar-opacidade text-decoration-none mx-2 fs-2" target="_blank"> <i class="fab fa-spotify text-alien"></i> </a>
                <a href="<?= $dados['lancamento'][0]['descricao']; ?>" class="_ativar-opacidade text-decoration-none mx-2 fs-2" target="_blank"> <i class="fab fa-youtube text-danger"></i> </a>
         </div>
    </div>
      
</section>
<!--SINGLE-->


<script src="<?= $base_url ?>modulos/single/js/app.js"></script>