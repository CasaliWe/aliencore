<?php 
    include_once "config/config.php";
?>

<link rel="stylesheet" href="<?= $base_url ?>modulos-admin/contents/galeria/css/style.css">


<p class="mb-5 small">Nesta sessão você pode atualizar as <strong>imagens</strong> da <strong>galeria</strong> do seu site!</p>


<!-- GALERIA -->
<section>
    <button type="buttom" class="btn btn-success btn-sm mb-5 " data-bs-toggle="modal" data-bs-target="#modal-add-galeria">Adicionar +</button>
    
    <?php foreach ($galeria as $evento) { ?>
        <div class="mb-4 item-acordion accordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#id-<?= $evento['id'] ?>" aria-expanded="false" aria-controls="id-<?= $evento['id'] ?>">
                        <strong><?= strtoupper($evento['nome_evento']) ?></strong>
                        <span class="mx-2">-</span>
                        <?php
                            $data_original = $evento['data_evento'];
                            $data_formatada = date("d/m/Y", strtotime($data_original));
                        ?>
                        <?= $data_formatada ?>
                    </button>
                </h2>
                <div id="id-<?= $evento['id'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
        
                        <form class="mt-3 pb-4 border-bottom" action="<?= $base_url ?>modulos-admin/contents/galeria/php/upload-imagens.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?= $evento['id']; ?>" name="id_evento">
                        
                            <div class='mb-3'>
                              <label for='imagens_evento'>Imagens do evento*</label>
                              <input type='file' id='imagens_evento' name='imagens_evento[]' class='form-control' multiple required>
                            </div>

                            <button class="btn btn-success btn-sm py-2 px-5">Salvar imagens</button>
                        </form>

                        <!-- lista das imagens cadastradas para esse evento -->
                        <div class="mt-5 row pb-4 border-bottom">
                            <?php if ($evento->imagemEvento->isNotEmpty()) { ?>
                            <?php foreach ($evento->imagemEvento as $img) { ?>
                                <div class="col-12 col-lg-3 mb-3">
                                    <div class="_container-img-evento">
                                        <img onclick="abrirModalImagem('<?= $img['id'] ?>','<?= $base_url ?>assets/imagens/arquivos/galeria/<?= $img->imagem ?>')" style="cursor: pointer;" src="<?= $base_url ?>assets/imagens/arquivos/galeria/<?= $img->imagem ?>">
                                    </div>
                                </div>
                            <?php } ?>
                            <?php } else { ?>
                                <p>Nenhuma imagem cadastrada para este evento.</p>
                            <?php } ?>
                        </div>
                        <!-- lista das imagens cadastradas para esse evento -->


                        <div class="mt-4 d-flex">
                            <!-- btn deletar evento -->
                            <form action="<?= $base_url ?>modulos-admin/contents/galeria/php/deletar-evento.php" method="post">
                                <input type="hidden" value="<?= $evento['id']; ?>" name="id_evento">
                                <button class="btn btn-danger btn-sm btn-sm py-2 px-4 me-2">Deletar evento</button>
                            </form>
                            <!-- btn deletar evento -->

                            <!-- btn editar evento -->
                            <button onclick="editarEventoModal('<?= $evento['id']; ?>', '<?= $evento['nome_evento']; ?>', '<?= $evento['data_evento']; ?>')" class="btn btn-primary btn-sm btn-sm py-2 px-4">Editar evento</button>
                            <!-- btn editar evento -->
                        </div>

        
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
<!-- GALERIA -->




<script>
    function editarEventoModal(id, nome, data) {
        document.getElementById("id_evento_editar").value = id;
        document.getElementById("nome_evento_editar").value = nome;
        document.getElementById("data_evento_editar").value = data;

        var meuModal = new bootstrap.Modal(document.getElementById('modal-editar-galeria'));
        meuModal.show();
    }


    function abrirModalImagem(id, img){
        Swal.fire({
            imageUrl: img,
            customClass: {
                popup: 'custom-swal', 
                image: 'custom-swal-image' 
            },
            imageAlt: 'Imagem do projeto',
            showCloseButton: true,
            showConfirmButton: false,
            html: '<button id="customButton" class="btn btn-danger btn-sm">Deletar imagem</button>',
            didOpen: () => {
                const customButton = document.getElementById('customButton');
                customButton.addEventListener('click', () => {
                    window.location.href = '<?= $base_url; ?>modulos-admin/contents/galeria/php/deletar-imagem.php?img=' + id;
                });
            }
        });
    }
</script>