<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/integrantes/css/style.css">


<!--INTEGRANTES-->
<section id="integrantes-home" class="bg-dark text-center">

        <h1 class="d-none">Integrantes da banda Alien Core</h1>


        <h1 data-aos="fade-up" class="_title-sessao-integrantes-home px-3">NOSSA EQUIPE</h1>
        <h4 data-aos="fade-up" class="text-secondary _sub-sessao-integrantes-home mb-3">Conheça nossos integrantes</h4>

        <div class="_container-integrantes row mt-4 justify-content-center">

            <!-- VEM DO JS -->

        </div>
</section>
<!--INTEGRANTES-->



<!--MODAL APRESENTAÇÃO INTEGRANTES-->
<div id="apresentacao-integrantes">

    <h1 class="d-none">Modal apresentação dos integrantes</h1>

    <div class="_container-integrante-apresentacao">
         <div><img id="img-apresentacao" src="" class="_hover-img-integrante"></div>
         <div>
            <h1 class="ps-3 pe-3 d-inline-block mb-4" style="border-left: 2px solid #14EE5A;border-right: 2px solid #14EE5A;" id="nome-apresentacao"> </h1>
            <p class="text-secondary" id="descri-apresentacao"></p>
            <button id="btn-integrante-close" class="_btn-alien mt-3 d-none" onclick="fecharApresentacao()">FECHAR</button>
         </div>
    </div>

</div>
<!--MODAL APRESENTAÇÃO INTEGRANTES-->



<script>
    // INTEGRANTES
    var integrantes = []

    <?php foreach ($dados['integrantes'] as $int) { ?>
        integrantes.push({nome: '<?= $int['titulo'] ?>', img: '<?= $base_url ?>admin/assets/imagens/arquivos/integrantes/<?= $int['imagem'] ?>', instagram: '<?= $int['link'] ?>', descricao: '<?= $int['descricao'] ?>'})
    <?php } ?>
</script>



<script src="<?= $base_url ?>modulos/integrantes/js/app.js"></script>