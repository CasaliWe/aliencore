<div class="modal fade" id="modal-add-galeria" tabindex="-1" aria-labelledby="modal-add-galeria" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Adicionar novo evento na galeria +</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= $base_url ?>modulos-admin/contents/galeria/php/salvar-galeria.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
          
            <div class='mb-3'>
              <label class="small" for='nome-evento'>Nome Evento*</label>
              <input type='text' id='nome-evento' name='nome-evento' class='form-control' required>
            </div>

            <div class='mb-3'>
              <label class="small" for='data-evento'>Data Evento*</label>
              <input type='date' id='data-evento' name='data-evento' class='form-control' required>
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