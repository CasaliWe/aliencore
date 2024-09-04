<?php


require '../../../../config/bootstrap.php';
use Repositories\GaleriaRepository;

$id = filter_input(INPUT_POST, 'id_evento', FILTER_SANITIZE_SPECIAL_CHARS);

//criar uma var para receber os nomes dos arquivos
$nomesArquivos = [];

// verifica se os arquivos vieram e faz upload de cad aum deles
if (isset($_FILES['imagens_evento'])) {
    $pastaDestino = __DIR__ . "/../../../../assets/imagens/arquivos/galeria/";
    $dataHora = date('YmdHis');

    foreach ($_FILES['imagens_evento']['name'] as $key => $nomeArquivo) {
        if ($_FILES['imagens_evento']['error'][$key] == UPLOAD_ERR_OK) {
            $nomeArquivo = $dataHora . $nomeArquivo;
            $caminhoDestino = $pastaDestino . $nomeArquivo;

            move_uploaded_file($_FILES['imagens_evento']['tmp_name'][$key], $caminhoDestino);

            $nomesArquivos[] = $nomeArquivo;
        }
    }
}

//salvar no banco
$res = GaleriaRepository::createImagensGaleria($id, $nomesArquivos);
if ($res) {
    header('Location: ../../../../galeria.php?create=true');
} else {
    header('Location: ../../../../galeria.php?error=true');
}