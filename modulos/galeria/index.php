<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/galeria/css/style.css">



<!--GALERIA DE FOTOS DOS EVENTOS-->
<section class="bg-dark py-3 py-lg-5">

        <!--all images evento-->
        <?php foreach ($dados['galeria'] as $evento) { ?>        
                <div class="container-all-img-evento"> 
                        <p data-aos="fade-up" class="text-alien">Um pouco do que rolou em</p>
        
                        <h1 data-aos="fade-up" class="text-white"><?= $evento['nome_evento']; ?></h1>

                        <?php
                            $data_original = $evento['data_evento'];
                            $data_formatada = date("d/m/Y", strtotime($data_original));
                        ?>
        
                        <span data-aos="fade-up" class="text-secondary mb-4" style="margin-top: -10px;"><?= $data_formatada; ?></span>
        
                        <!-- imagens -->
                        <div class="row w-100 mb-3 justify-content-center">
                                <?php foreach ($evento->imagemEvento as $img) { ?>           
                                        <div data-aos="fade-up" class="col-12 col-lg-4 py-2 py-lg-2 px-0 px-lg-2"> 
                                           <div class="_container-img">
                                              <img style="cursor: pointer;" onclick="abrirModalImagem('<?= $base_url; ?>admin/assets/imagens/arquivos/galeria/<?= $img['imagem']; ?>')" src="<?= $base_url; ?>admin/assets/imagens/arquivos/galeria/<?= $img['imagem']; ?>">
                                           </div>        
                                        </div>
                                <?php } ?>
                        </div>
                        <!-- imagens -->
                </div>
        <?php } ?>
        <!--all images evento-->

</section>
<!--GALERIA DE FOTOS DOS EVENTOS-->



<script>
        function abrirModalImagem(img){
                Swal.fire({
                        imageUrl: img,
                        customClass: {
                                popup: 'custom-swal', 
                                image: 'custom-swal-image' 
                        },
                        imageAlt: 'Imagem do projeto',
                        showCloseButton: true,
                        showConfirmButton: false,
                });
        }
</script>