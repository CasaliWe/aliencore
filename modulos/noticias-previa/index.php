<?php
    include_once __DIR__ . '/../../config/config.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/noticias-previa/css/style.css">



<!--NOTICIAS-->
<section id="noticias-home" class="bg-dark py-5 px-1 py-lg-5 px-lg-5 d-flex flex-column justify-content-center align-items-center">

         <h1 class="d-none">Notícias da Alien Core</h1>

         <h1 data-aos="fade-up" class="_title-sessao-noticias-home px-3">ÚLTIMAS NOTÍCIAS</h1>
         <h3 data-aos="fade-up" class="_sub-sessao-noticias-home text-secondary mb-2 mb-lg-4">Tudo que rolou recentemente, Bem vindos a Alien Core!</h3>

         <div class="w-100 row mt-5 justify-content-center gap-2">

              <a data-aos="fade-up" href="noticia.php?id=0" class="col-12 col-lg-3 mb-4 _container-noticia-home">
                  <div>
                      <div class="_container-img-noticia-home"> <img src="<?= $base_url; ?>/assets/imagens/capa-show.jpg"> </div>
                      <h3 class="mt-3 _title-noticia-home text-truncate">Nova formação</h3>
                      <h5 class="text-secondary mt-2 _descri-noticia-home">banda Alien Core anunciou recentemente uma nova formação, marcando um novo capítulo em sua trajetória musical. Com a saída de Jasan e Wilson, a banda se reorganiza com Jean assumindo a guitarra, e Gui, anteriormente focado nos vocais, agora desempenhando um papel duplo como vocalista e baixista. <br><br> A banda trabalha em novas composições para somar aos singles "Bad Taste in Men" e "This Woman", além de novos covers. Fiquem ligados para novidades.</h5>
                      <h5 class="text-alien mt-4 _data-noticia-home">Abril - 2024</h5>
                  </div>
              </a>


              <a data-aos="fade-up" href="noticia.php?id=1" class="col-12 col-lg-3 mb-4 _container-noticia-home">
                  <div>
                       <div class="_container-img-noticia-home"> <img src="<?= $base_url; ?>/assets/imagens/this-woman.jpeg"> </div>
                       <h3 class="mt-3 _title-noticia-home text-truncate">This Woman - Novo single</h3>
                       <h5 class="text-secondary mt-2 _descri-noticia-home">De volta a ativa, novo single será lançado dia 17 de fevereiro de 2024, "THIS WOMAN", aguardem...</h5>
                       <h5 class="text-alien mt-4 _data-noticia-home">Fevereiro - 2024</h5>
                  </div>
              </a>

              <a data-aos="fade-up" href="noticia.php?id=2" class="col-12 col-lg-3 mb-4 _container-noticia-home">
                  <div>
                      <div class="_container-img-noticia-home"> <img src="<?= $base_url; ?>/assets/imagens/capa-single.jpeg"> </div>
                      <h3 class="mt-3 _title-noticia-home text-truncate">Bad Taste In Man - Novo single lançado</h3>
                      <h5 class="text-secondary mt-2 _descri-noticia-home">A banda Alien Core está prestes a conquistar os ouvidos dos fãs de música com o seu mais recente single, intitulado "Bad Taste in Man". Este novo lançamento está agendado para o dia 12 de setembro e estará disponível em todas as principais plataformas digitais. Prepare-se para ser envolvido por essa experiência musical única e emocionante. Marque a data em seu calendário e não perca este lançamento imperdível!</h5>
                      <h5 class="text-alien mt-4 _data-noticia-home">Setembro - 2023</h5>
                  </div>
              </a>
              
         </div>

         <button data-aos="fade-up" onclick="window.location.href='noticias.php'" class="_btn-alien mt-3 mt-lg-5"><i class="fas fa-eye me-2"></i> TODAS AS NOTÍCIAS</button>
</section>
<!--NOTICIAS-->