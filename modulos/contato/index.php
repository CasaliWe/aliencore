<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/contato/css/style.css">



<section id="contato" style="background-image: url('<?= $base_url ?>assets/imagens/capa-formulario.jpg');">

    <h1 class="d-none">Formulário para contato</h1>

    <div class="row _container-form">

         <div data-aos="fade-up" class="col-12 col-lg-6 order-2 order-lg-1 mb-5">

             <h1 class="mb-5">CONTATOS</h1>

             <div class="d-flex flex-column">
                 <a class="mb-3 fs-4" href="#"><i class="fas fa-map-pin me-2"></i> Passo Fundo - RS</a>
                 <a class="mb-3 fs-4" href="https://wa.me/5554991538488" target="_blank"><i class="fab fa-whatsapp me-2"></i> (54) 99153-8488</a>
                 <a class="mb-3 fs-4" href="mailto:aliencorerock@gmail.com"><i class="fas fa-envelope me-2"></i> aliencorerock@gmail.com</a>
                 <a class="mb-3 fs-4" href="https://www.instagram.com/aliencore_rock/" target="_blank"><i class="fab fa-instagram me-2"></i> @aliencore_rock</a>
                 <a class="mb-3 fs-4" href="https://www.facebook.com/aliencorerock" target="_blank"><i class="fab fa-facebook me-2"></i> aliencorerock</a>
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