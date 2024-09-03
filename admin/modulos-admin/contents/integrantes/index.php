<?php 
    include_once "config/config.php";
?>

<link rel="stylesheet" href="<?= $base_url ?>modulos-admin/contents/integrantes/css/style.css">


<p class="mb-5 small">Nesta sessão você pode atualizar os <strong>Integrantes</strong> do seu site!</p>


<!-- PROJETOS -->
<section>
    <button type="buttom" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-add-integrantes">Adicionar +</button>
    
    
    <div class="mt-5" id="container-projetos">
        <div class="w-100" id="container-projetos-filho">
            <?php foreach ($integrantes as $key => $projeto) { ?>
                <div class="my-3 py-3 px-3 border-bottom border-top">
                    <div class="row">
                        <div class="align-self-center fs-5 col-1"><?= $key +1; ?>-</div>
                        <div class="align-self-center col-2 pe-4 text-truncate"><?= $projeto['titulo']; ?></div>
                        <div class="align-self-center col-6 pe-3 text-truncate"><?= $projeto['descricao']; ?></div>
                        <div class="align-self-center col-2 d-flex justify-content-center"> <div class="_container-img-projeto"> <img src="<?= $base_url ?>assets/imagens/arquivos/integrantes/<?= $projeto['imagem']; ?>" alt="<?= $projeto['titulo']; ?>"> </div> </div>
                        <div class="align-self-center justify-content-end col-1 d-flex">
                            <i onclick="abrirModalEditar('<?= $projeto['id']; ?>', '<?= $projeto['titulo']; ?>', '<?= $projeto['descricao']; ?>', '<?= $projeto['link']; ?>', '<?= $base_url ?>assets/imagens/arquivos/integrantes/<?= $projeto['imagem']; ?>')" class="fas fs-5 me-2 fa-edit"></i>
                            <form action="<?= $base_url; ?>modulos-admin/contents/integrantes/php/excluir-integrante.php" method="post">
                                <input type="hidden" name="id-projeto" value="<?= $projeto['id']; ?>">
                                <button type="submit" style="border: none; background-color: transparent;"><i class="fas fs-5 fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>
<!-- PROJETOS -->



<script src="<?php echo $base_url ?>modulos-admin/contents/integrantes/js/app.js"></script>
