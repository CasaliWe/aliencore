<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/noticias-previa/css/style.css">



<!--NOTICIAS-->
<section id="noticias-home" class="bg-dark py-5 px-1 py-lg-5 px-lg-5 d-flex flex-column justify-content-center align-items-center">

         <h1 class="d-none">Notícias da Alien Core</h1>

         <h1 data-aos="fade-up" class="_title-sessao-noticias-home px-3">ÚLTIMAS NOTÍCIAS</h1>
         <h3 data-aos="fade-up" class="_sub-sessao-noticias-home text-secondary mb-2 mb-lg-4">Tudo que rolou recentemente, Bem vindos a Alien Core!</h3>

         <div class="w-100 row mt-5 justify-content-center gap-2">

            <?php foreach ($dados['noticias'] as $key => $not) { ?>
                    <?php if($key == 3) break; ?>
                    <a data-aos="fade-up" href="noticia.php?id=<?= $not['id']; ?>" class="col-12 col-lg-3 mb-4 _container-noticia-home">
                    <div>
                        <div class="_container-img-noticia-home"> <img src="<?= $base_url; ?>admin/assets/imagens/arquivos/noticias/<?= $not['imagem']; ?>"> </div>
                        <h3 class="mt-3 _title-noticia-home text-truncate"><?= $not['titulo']; ?></h3>
                        <h5 class="text-secondary mt-2 _descri-noticia-home"><?= $not['descricao']; ?>]</h5>
                        <h5 class="text-alien mt-4 _data-noticia-home"><?= $not['link']; ?></h5>
                    </div>
                    </a>
            <?php } ?>
              
         </div>

         <button data-aos="fade-up" onclick="window.location.href='noticias.php'" class="_btn-alien mt-3 mt-lg-5"><i class="fas fa-eye me-2"></i> TODAS AS NOTÍCIAS</button>
</section>
<!--NOTICIAS-->