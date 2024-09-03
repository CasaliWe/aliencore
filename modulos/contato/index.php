<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/contato/css/style.css">



<section id="contato" style="background-image: url('<?= $base_url ?>admin/assets/imagens/arquivos/banners/<?= $dados['banners'][0]['banner_contato_desktop']; ?>');">

    <h1 class="d-none">Formulário para contato</h1>

    <div class="row _container-form">

         <div data-aos="fade-up" class="col-12 col-lg-6 order-2 order-lg-1 mb-5">

             <h1 class="mb-5">CONTATOS</h1>

             <div class="d-flex flex-column">
                 <a class="mb-3 fs-4" href="#"><i class="fas fa-map-pin me-2"></i> <?= $dados['endereco']['cidade']; ?> - <?= $dados['endereco']['estado']; ?></a>
                 <a class="mb-3 fs-4" href="https://wa.me/<?= preg_replace("/[^0-9]/", "", $dados['contatos']['wpp_principal']); ?>" target="_blank"><i class="fab fa-whatsapp me-2"></i> <?= $dados['contatos']['wpp_principal']; ?></a>
                 <a class="mb-3 fs-4" href="mailto:<?= $dados['contatos']['email_site']; ?>"><i class="fas fa-envelope me-2"></i> <?= $dados['contatos']['email_site']; ?></a>
                 <a class="mb-3 fs-4" href="<?= $dados['contatos']['instagram']; ?>" target="_blank"><i class="fab fa-instagram me-2"></i> <?= $dados['contatos']['_instagram']; ?></a>
                 <a class="mb-3 fs-4" href="<?= $dados['contatos']['facebook']; ?>" target="_blank"><i class="fab fa-facebook me-2"></i> <?= $dados['contatos']['_facebook']; ?></a>
             </div>

         </div>

         <div data-aos="fade-up" class="_form-inputs col-12 mb-5 col-lg-6 order-1 order-lg-2 d-flex justify-content-center align-items-center">

            <form action="<?= $base_url ?>modulos/contato/php/enviar-contato.php" method="post" class="w-100">
                  <h1 class="mb-4 text-center">FORMULÁRIO</h1>

                  <input type="text" class="form-control mb-2" required name="nome" placeholder="Nome">
                  <input type="email" class="form-control mb-2" required name="email" placeholder="Email">
                  <input id="tel-form" type="tel" required name="whatsapp" maxlength="15" inputmode="tel" class="form-control mb-2" placeholder="Whatsapp">
                  <textarea name="mensagem" rows="4" class="form-control mb-4" required placeholder="mensagem"></textarea>

                  <button type="submit" class="btn btn-secondary w-50 mx-auto d-block">ENVIAR</button>
            </form>
                  
         </div>

    </div>
      
</section>



<script src="<?= $base_url ?>modulos/contato/js/app.js"></script>