<?php
    include_once __DIR__ . '/../../config/config.php';

    $id = $_GET['id'];

    $noticias = [
        0 => [
            'titulo' => 'Nova formação',
            'data' => 'Abril - 2024',
            'imagem' => $base_url.'assets/imagens/capa-show.jpg',
            'descri' => 'banda Alien Core anunciou recentemente uma nova formação, marcando um novo capítulo em sua trajetória musical. Com a saída de Jasan e Wilson, a banda se reorganiza com Jean assumindo a guitarra, e Gui, anteriormente focado nos vocais, agora desempenhando um papel duplo como vocalista e baixista. A banda trabalha em novas composições para somar aos singles "Bad Taste in Men" e "This Woman", além de novos covers. Fiquem ligados para novidades.'
        ],
        1 => [
            'titulo' => 'This Woman - Novo single',
            'data' => 'Feveiro - 2024',
            'imagem' => $base_url.'assets/imagens/this-woman.jpeg',
            'descri' => 'De volta a ativa, novo single será lançado dia 17 de fevereiro de 2024, "THIS WOMAN", aguardem...'
        ],
        2 => [
            'titulo' => 'Prestes a lançar seu segundo single',
            'data' => 'Novembro - 2023',
            'imagem' => $base_url.'assets/imagens/example1.jpg',
            'descri' => 'À medida que o ano chega ao seu encerramento, a banda Alien Core está se preparando para lançar seu muito aguardado segundo single, programado para ser lançado em dezembro de 2023. Este novo single promete apresentar uma vibe distinta e envolvente, diferente do seu antecessor. Mantenha-se atento para mais informações e atualizações sobre este lançamento, que promete surpreender e cativar os ouvintes.'
        ],
        3 => [
            'titulo' => 'Bad Taste In Man - Novo single lançado',
            'data' => 'Setembro - 2023',
            'imagem' => $base_url.'assets/imagens/capa-single.jpeg',
            'descri' => 'A banda Alien Core está prestes a conquistar os ouvidos dos fãs de música com o seu mais recente single, intitulado "Bad Taste in Man". Este novo lançamento está agendado para o dia 12 de setembro e estará disponível em todas as principais plataformas digitais. Prepare-se para ser envolvido por essa experiência musical única e emocionante. Marque a data em seu calendário e não perca este lançamento imperdível!'
        ],
        4 => [
            'titulo' => 'Uma parceria forte',
            'data' => 'Setembro - 2023',
            'imagem' => $base_url.'assets/imagens/example2.jpg',
            'descri' => 'Em um emocionante encontro no palco do Maroca Bar, as icônicas bandas Alien e Royalhood uniram seus talentos e energias musicais, dando início a uma promissora parceria. Quem testemunhou essa incrível colaboração ao vivo mal pode esperar por 2024, quando as duas bandas planejam uma série de eventos espetaculares que prometem agitar o cenário musical. Fique ligado para mais novidades sobre essa parceria que deixará uma marca no cenário musical!'
        ]
    ];
    
    if (array_key_exists($id, $noticias)) {
        $titulo_noticias = $noticias[$id]['titulo'];
        $data_noticias = $noticias[$id]['data'];
        $img_noticias = $noticias[$id]['imagem'];
        $descri_noticias = $noticias[$id]['descri'];
    } else {
        $titulo_noticias = '';
        $data_noticias = '';
        $img_noticias = '';
        $descri_noticias = '';
    }
?>


<link rel="stylesheet" href="<?= $base_url ?>modulos/noticia/css/style.css">




<!--NOTICIA UNICA-->
<section id="noticia-unica" class="py-5 bg-dark">
        <div class="_container-noticia-unica d-flex flex-column justify-content-center align-items-start">
            <h4 class="text-white"><?= $titulo_noticias; ?></h4>
            <h6 class="text-alien"><?= $data_noticias; ?></h6>
            <div id="container-imagem-noticia"> <img src="<?= $img_noticias; ?>"> </div>
            <p class="text-secondary"><?= $descri_noticias; ?></p>
            <a href="<?= $base_url; ?>noticias.php">Todas as notícias</a>
        </div>
</section>
<!--NOTICIA UNICA-->