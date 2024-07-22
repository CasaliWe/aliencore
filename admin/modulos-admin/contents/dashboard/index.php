<?php 
    include_once "config/config.php";
?>


<p class="mb-5 small">Nesta sessão você pode atualizar os <strong>dados</strong> de <strong>contatos</strong> e <strong>endereço</strong> do seu site!</p>


<!-- contatos e redes sociais -->
<form onsubmit="loading()" action="modulos-admin/contents/dashboard/php/atualizar-contatos.php" method="post" class="row mb-5 pb-5 border-bottom">
    <div class="mb-4 col-12 col-lg-6">
        <label for="instagram" class="small">Instagram*</label>
        <input class="form-control" type="text" required name="instagram" id="instagram">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="instagram-@" class="small">@ do instagram*</label>
        <input class="form-control" type="text" required name="instagram-@" id="instagram-@">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="email-site" class="small">E-mail site*</label>
        <input class="form-control" type="email" required name="email-site" id="email-site">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="email-site-admin" class="small">E-mail recebe contatos do site*</label>
        <input class="form-control" type="email" required name="email-site-admin" id="email-site-admin">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="wpp-principal" class="small">Whatsapp principal*</label>
        <input class="form-control" type="tel" required name="wpp-principal" id="wpp-principal" maxlength="15" inputmode="tel">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="wpp-secundario" class="small">Whatsapp secundário*</label>
        <input class="form-control" type="tel" required name="wpp-secundario" id="wpp-secundario" maxlength="15" inputmode="tel">
    </div>

    <div class="col-12 col-lg-3">
        <button class="btn btn-success w-100">Salvar</button>
    </div>
</form>
<!-- contatos e redes sociais -->





<!-- endereço e maps -->
<form onsubmit="loading()" action="modulos-admin/contents/dashboard/php/atualizar-endereco.php" method="post" class="row mb-5">
    <div class="mb-4 col-12">
        <label for="endereco" class="small">Endereço*</label>
        <input class="form-control text-capitalize" type="text" required name="endereco" id="endereco">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="cidade" class="small">Cidade*</label>
        <input class="form-control text-capitalize" type="text" required name="cidade" id="cidade">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="estado" class="small">Estado*</label>
        <input class="form-control text-uppercase" maxlength="2" type="text" required name="estado" id="estado">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="maps" class="small">Maps (iFrame)*</label>
        <input class="form-control" type="text" required name="maps" id="maps">
    </div>

    <div class="mb-4 col-12 col-lg-6">
        <label for="link-maps" class="small">Link para o goole maps*</label>
        <input class="form-control" type="text" required name="link-maps" id="link-maps">
    </div>

    <div class="col-12 col-lg-3">
        <button class="btn btn-success w-100">Salvar</button>
    </div>
</form>
<!-- endereço e maps -->




<script src="<?php echo $base_url ?>modulos-admin/contents/dashboard/js/app.js"></script>
