<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/instagram/css/style.css">




<!--INSTAGRAM-->
<section class="bg-dark py-5 d-flex flex-column justify-content-center align-items-center">

    <h3 data-aos="fade-up" class="text-alien mb-4">Nosso instagram</h3>

    <iframe data-aos="fade-up" src="https://snapwidget.com/embed/1048498" class="d-none d-lg-block snapwidget-widget mb-5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:555px; height:370px"></iframe>
    <iframe data-aos="fade-up" src="https://snapwidget.com/embed/1048500" class="d-block d-lg-none snapwidget-widget mb-5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:270px; height:270px"></iframe>

    <a data-aos="fade-up" href="<?= $dados['contatos']['instagram']; ?>" target="_blank" id="btn-ver-nosso-instagram"> <i class="fab fa-instagram me-1"></i> Ver nosso instagram</a>
      
</section>
<!--INSTAGRAM-->