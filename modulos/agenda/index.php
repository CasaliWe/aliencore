<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/agenda/css/style.css">




<section class="bg-dark py-5 d-flex flex-column justify-content-center align-items-center">
        <h6 data-aos="fade-up" class="text-alien">ALIEN CORE</h6>
        <h2 data-aos="fade-up" class="text-white mb-4">Próximos shows</h2>

        <div id="container-shows">

            <div data-aos="fade-up" class="py-3 px-2 w-100 border-top border-bottom d-flex align-items-center justify-content-between">
                   <span class="fw-bold fs-5">DATA/LOCAL</span>
                   <i class="fab fa-instagram fs-4"></i>
            </div>

            <!--lista de shows-->
            <div class="border-bottom mt-5 pt-3 px-2 pb-3">

               <?php foreach ($dados['eventos'] as $evento) { ?>
                    <div data-aos="fade-up" class="W-100 py-2 d-flex align-items-center justify-content-between">
                       <p class="fw-bold fs-6 _descri-evento"><?= $evento['link']; ?> - <span class="text-alien fw-bold fs-6"><?= $evento['url']; ?></span> </p>
                       <a href="<?= $dados['contatos']['instagram']; ?>" target="_blank" class="btn-ver-no-insta-evento">Ver no instagram</a>
                    </div>
               <?php } ?>

               <?php 
                  if(count($dados['eventos']) == 0){
                         echo '<h3 data-aos="fade-up" class="text-secondary my-5 py-4 text-center w-100">Sem eventos no momento.</h3>';
                  }
               ?>

            </div>
            <!--lista de shows-->

            <p data-aos="fade-up" class="w-100 text-center text-white mt-5 pt-4 fs-5">Para mais informações <a href="https://wa.me/5554991538488" target="_blank" class="text-alien" style="text-decoration: underline;">Entre em contato!</a></p>

        </div>
</section>