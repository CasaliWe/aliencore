<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/shows/css/style.css">



<!--SHOWS DA ALIEN CORE BANNER-->
<section id="shows-alien-core-home" style="background-image: url(<?= $base_url ?>admin/assets/imagens/arquivos/banners/<?= $dados['banners'][0]['banner_home_desktop']; ?>);">

       <h1 class="d-none">Show da banda Alien Core</h1>

       <div data-aos="fade-up">
            <h1>SHOWS DA ALIEN CORE</h1>
            <h4 class="text-secondary">Fique por dentro de onde a Alien Core irá tocar!</h4>
            <button onclick="window.location.href='agenda.php'" class="_btn-alien mt-4"><i class="fas fa-tasks me-2"></i> VER AGENDA</button>
       </div>
</section>
<!--SHOWS DA ALIEN CORE BANNER-->