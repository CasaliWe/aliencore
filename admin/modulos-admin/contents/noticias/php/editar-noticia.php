<?php

require '../../../../config/bootstrap.php';
use Repositories\NoticiasRepository;

$id = filter_input(INPUT_POST, 'id-projeto-editar', FILTER_SANITIZE_SPECIAL_CHARS);
$titulo = filter_input(INPUT_POST, 'titulo-projeto-editar', FILTER_SANITIZE_SPECIAL_CHARS);
$descri = filter_input(INPUT_POST, 'descricao-projeto-editar', FILTER_SANITIZE_SPECIAL_CHARS);
$link = filter_input(INPUT_POST, 'link-projeto-editar', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($_FILES['img-projeto-editar']) && $_FILES['img-projeto-editar']['error'] != UPLOAD_ERR_NO_FILE) {
    $pastaDestino = __DIR__ . "/../../../../assets/imagens/arquivos/noticias/";
    $dataHora = date('YmdHis');
    $nomeArquivo = $dataHora . basename($_FILES['img-projeto-editar']['name']);
    $caminhoDestino = $pastaDestino . $nomeArquivo;

    move_uploaded_file($_FILES['img-projeto-editar']['tmp_name'], $caminhoDestino);

    $dados = [
        'titulo' => $titulo,
        'descricao' => $descri,
        'link' => $link,
        'imagem' => $nomeArquivo
    ];
    $res = NoticiasRepository::update($dados, $id);
    if ($res) {
        header('Location: ../../../../noticias.php?success=true');
    } else {
        header('Location: ../../../../noticias.php?error=true');
    }
}else{
    $dados = [
        'titulo' => $titulo,
        'descricao' => $descri,
        'link' => $link
    ];
    $res = NoticiasRepository::update($dados, $id);
    if ($res) {
        header('Location: ../../../../noticias.php?success=true');
    } else {
        header('Location: ../../../../noticias.php?error=true');
    }
}
