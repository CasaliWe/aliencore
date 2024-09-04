<?php 
    include_once __DIR__ . '/../../config/config.php';
    include_once __DIR__ . '/../../config/getUrl.php';
?>

<!--TAGS META-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="banda de rock, rock, Passo Fundo, Alien Core, música, Passo Fundo banda">
<meta name="description" content="Banda de rock Alien Core criada em 2022 na cidade de Passo Fundo, Rio Grande do Sul. Conheça nossa música e história.">
<meta property="og:type" content="website">
<meta property="og:image" content="<?= $base_url; ?>assets/imagens/thumb.jpg">
<meta property="og:image:width" content="310">
<meta property="og:image:height" content="310">
<meta property="og:url" content="<?= $base_url; ?>">
<meta property="og:title" content="Banda Alien Core">
<meta property="og:description" content="Conheça a Banda Alien Core, criada em 2022 na cidade de Passo Fundo, Rio Grande do Sul. Rock de qualidade e história única.">

<!-- ALERT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--FAVICON-->
<link rel="icon" href="<?= $base_url; ?>assets/imagens/favicon.png">

<!--BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!--CSS GLOBAL-->
<link rel="stylesheet" href="<?= $base_url; ?>assets/css/style.css">

<!-- BASE URL JS -->
<script>
    var base_url = '<?= $base_url; ?>';
</script>

<!--FONTAWSOME-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!--ANIMATION SCROLL-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<title>Alien Core | <?= $pagAtual ?></title>