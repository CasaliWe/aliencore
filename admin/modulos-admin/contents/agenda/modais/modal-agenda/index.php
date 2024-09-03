<div class="modal fade" id="modal-agenda" tabindex="-1" aria-labelledby="modal-agenda" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Adicionar Evento +</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        <form onsubmit="loading()" action="modulos-admin/contents/agenda/php/adicionar-evento.php" method="post">
            <div class="modal-body">

                <div class='mb-3'>
                    <label for='link_footer'>Data*</label>
                    <input type='text' id='link_footer' name='link_footer' placeholder='Ex: 14 de Maio de 2024' class='form-control' required>
                </div>

                <div class='mb-3'>
                    <label for='url_footer'>Local*</label>
                    <input type='text' id='url_footer' name='url_footer' placeholder='Ex: Maroca Bar' class='form-control' required>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
  </div>
</div>