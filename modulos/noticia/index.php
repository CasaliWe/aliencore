<?php
    include_once __DIR__ . '/../../config/config.php';

    $id = $_GET['id'];

    foreach ($dados['noticias'] as $value) { 
        if($value['id'] == $id){
            $titulo_noticias = $value['titulo'];
            $descri_noticias = $value['descricao'];
            $data_noticias = $value['link'];
            $img_noticias = $base_url . 'admin/assets/imagens/arquivos/noticias/' . $value['imagem'];
        } 
    }
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/noticia/css/style.css">




<!--NOTICIA UNICA-->
<section id="noticia-unica" class="py-5 bg-dark">
        <div class="_container-noticia-unica d-flex flex-column justify-content-center align-items-start">
            <h4 class="text-white"><?= $titulo_noticias; ?></h4>
            <h6 class="text-alien"><?= $data_noticias; ?></h6>
            <div id="container-imagem-noticia"> <img src="<?= $img_noticias; ?>"> </div>
            <p class="text-secondary"><?= $descri_noticias; ?></p>
            <a href="<?= $base_url; ?>noticias.php">Todas as notícias</a>
        </div>
</section>
<!--NOTICIA UNICA-->