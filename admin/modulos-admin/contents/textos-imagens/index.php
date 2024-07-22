<?php 
    include_once "config/config.php";
?>


<link rel="stylesheet" href="<?php echo $base_url ?>modulos-admin/contents/textos-imagens/css/style.css">


<p class="mb-5 small">Nesta sessão você pode atualizar os <strong>textos</strong> e <strong>imagens</strong> do seu site!</p>


<div class="mb-4 item-acordion accordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="fw-semibold accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pagina-empresa" aria-expanded="false" aria-controls="pagina-empresa">
                Página Empresa
            </button>
        </h2>
        <div id="pagina-empresa" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">

                <!-- texto empresa -->
                <section class="mb-5 pb-5 border-bottom">
                    <form onsubmit="loading()" action="modulos-admin/contents/textos-imagens/php/atualizar-texto.php" method="post" class="mb-5">
                        <input type="hidden" name="identificador_texto" value="text_empresa">
                        <div>
                            <label for="texto-empresa" class="mb-2 small">Texto Empresa*</label>
                            <textarea id="texto-empresa" name="texto">  </textarea>
                        </div>

                        <p class="small mt-1">Para ver no site <a href="" target="_blank" class="text-dark fw-bold">Clique aqui!</a></p>
                    
                        <button type="submit" class="px-5 mt-3 btn btn-success">Salvar</button>
                    </form>
                    
                    <form onsubmit="loading()" action="modulos-admin/contents/textos-imagens/php/atualizar-imagem.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" name="identificador_imagem" value="imagem_empresa">

                            <div class="mb-4 col-12 col-lg-10">
                                <label for="imagem-empresa" class="mb-2 small">Imagem Empresa*</label>
                                <input type="file" class="form-control" required name="imagem" id="imagem-empresa">
                            </div>
                    
                            <div class="col-12 col-lg-2">
                                <div class="w-100 container-imagem-preview">
                                    <img id="preview-imagem-empresa" src="<?php echo $base_url ?>assets/imagens/site-admin/preview.png">
                                </div>
                            </div>
                        </div>

                        <p class="small mt-1">Para ver no site <a href="" target="_blank" class="text-dark fw-bold">Clique aqui!</a></p>
                    
                        <button type="submit" class="px-5 mt-3 btn btn-success">Salvar</button>
                    </form>
                </section>
                <!-- texto empresa -->

            </div>
        </div>
    </div>
</div>




<script src="<?php echo $base_url ?>modulos-admin/contents/textos-imagens/js/app.js"></script>
