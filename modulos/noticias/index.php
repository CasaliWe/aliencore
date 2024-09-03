<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/noticias/css/style.css">




<section id="noticias-all" class="bg-dark py-5">
       <div class="container mt-5">
            <div class="row">

                <?php foreach ($dados['noticias'] as $key => $not) { ?>

                    <a data-aos="fade-up" href="<?= $base_url; ?>noticia.php?id=<?= $not['id']; ?>" class="_hover-noticia text-decoration-none col-12 col-lg-4 px-5 py-3 mb-5 d-flex flex-column justify-content-center align-items-start">
                        <img src="<?= $base_url; ?>admin/assets/imagens/arquivos/noticias/<?= $not['imagem']; ?>" class="w-100 mb-3">
                        <h4 class="_title-noticia-noticias text-white mb-3"><?= $not['titulo']; ?></h4>
                        <p class="_sub-noticia-noticias text-secondary mb-3"><?= $not['descricao']; ?></p>
                        <span class="d-block text-alien"><?= $not['link']; ?></span>
                    </a>

                <?php } ?>


            </div>
       </div>
</section>