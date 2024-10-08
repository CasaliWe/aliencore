<?php

require '../../../../config/bootstrap.php';
use Repositories\NoticiasRepository;


$titulo = filter_input(INPUT_POST, 'titulo-projeto', FILTER_SANITIZE_SPECIAL_CHARS);
$descri = filter_input(INPUT_POST, 'descri-projeto', FILTER_SANITIZE_SPECIAL_CHARS);
$link = filter_input(INPUT_POST, 'link-projeto', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($_FILES['img-projeto']) && $_FILES['img-projeto']['error'] != UPLOAD_ERR_NO_FILE) {
    $pastaDestino = __DIR__ . "/../../../../assets/imagens/arquivos/noticias/";
    $dataHora = date('YmdHis');
    $nomeArquivo = $dataHora . basename($_FILES['img-projeto']['name']);
    $caminhoDestino = $pastaDestino . $nomeArquivo;

    move_uploaded_file($_FILES['img-projeto']['tmp_name'], $caminhoDestino);


    $res = NoticiasRepository::create($titulo, $descri, $link, $nomeArquivo);
    if ($res) {
        header('Location: ../../../../noticias.php?create=true');
    } else {
        header('Location: ../../../../noticias.php?error=true');
    }
}
