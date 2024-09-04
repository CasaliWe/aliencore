<div class="modal fade" id="modal-editar-galeria" tabindex="-1" aria-labelledby="modal-editar-galeria" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Editar novo evento na galeria +</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= $base_url ?>modulos-admin/contents/galeria/php/editar-galeria.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <input type="hidden" id="id_evento_editar" name="id_evento_editar">

            <div class='mb-3'>
              <label class="small" for='nome_evento_editar'>Nome Evento*</label>
              <input type='text' id='nome_evento_editar' name='nome_evento_editar' class='form-control' required>
            </div>

            <div class='mb-3'>
              <label class="small" for='data_evento_editar'>Data Evento*</label>
              <input type='date' id='data_evento_editar' name='data_evento_editar' class='form-control' required>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
      </form>
    </div>
  </div>
</div>