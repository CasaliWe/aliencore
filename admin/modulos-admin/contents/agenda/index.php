<?php 
    include_once "config/config.php";
?>

<p class="mb-5 small">Nesta sessão você pode adicionar os <strong>Eventos</strong> do seu site!</p>


<!-- agenda -->
<section>

    <button type="button" class="mb-5 btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-links-footer"> Adicionar Evento + </button> 

    <!-- lista agenda -->
    <?php foreach ($eventos as $key => $link) { ?>
    <div class="mb-4 item-acordion accordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#links-footer-<?= $key ?>" aria-expanded="false" aria-controls="links-footer-<?= $key ?>">
                    <?= $link['url']; ?>
                </button>
            </h2>
            <div id="links-footer-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
    
                    <form onsubmit="loading()" action="modulos-admin/contents/agenda/php/atualizar-link-footer.php" method="post">
                        <input type="hidden" value="<?= $link['id']; ?>" name="link_footer_id">
                    
                        <div class='mb-3'>
                          <label for='link_footer_editar'>Data*</label>
                          <input type='text' value="<?= $link['link']; ?>" id='link_footer_editar' name='link_footer_editar' class='form-control' required>
                        </div>

                        <div class='mb-3'>
                          <label for='url_footer_editar'>Local*</label>
                          <input type='text' value="<?= $link['url']; ?>" id='url_footer_editar' name='url_footer_editar' class='form-control' required>
                        </div>

                        <button type="submit" class="btn btn-success btn-sm me-2">Atualizar</button>
                        <button onclick="deletarLinkFooter('<?= $link['id']; ?>')" type="button" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- lista agenda -->

</section>
<!-- agenda -->



<script>
    async function deletarLinkFooter(id){
        const res = await fetch(`${base_url}/modulos-admin/contents/agenda/php/deletar-link-footer.php?id=${id}`)
        const data = await res.json()
        if(data.status){
            let url = new URL(window.location.href);
            url.searchParams.append('delete', 'true');
            window.location.href = url;
        }
    }
</script>