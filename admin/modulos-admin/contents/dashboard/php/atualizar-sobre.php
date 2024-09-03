<?php

require '../../../../config/bootstrap.php';
use Repositories\SobreRepository;

$texto = $_POST['text_sobre'];

if (isset($_FILES['img_sobre']) && $_FILES['img_sobre']['error'] != UPLOAD_ERR_NO_FILE) {
    $pastaDestino = __DIR__."/../../../../assets/imagens/arquivos/sobre/";
    $dataHora = date('YmdHis');
    $nomeArquivo = $dataHora . basename($_FILES['img_sobre']['name']);
    $caminhoDestino = $pastaDestino . $nomeArquivo;

    move_uploaded_file($_FILES['img_sobre']['tmp_name'], $caminhoDestino);

    $data = [
        'texto_sobre' => $texto,
        'imagem_sobre' => $nomeArquivo,
    ];

    $res = SobreRepository::update($data);

    if(!$res){
        header('Location: ../../../../dashboard.php?error=true');
        exit;
    }else{
        header('Location: ../../../../dashboard.php?success=true');
        exit;
    }
}else{
    $data = [
        'texto_sobre' => $texto,
    ];
    
    $res = SobreRepository::update($data);
    
    if(!$res){
        header('Location: ../../../../dashboard.php?error=true');
        exit;
    }else{
        header('Location: ../../../../dashboard.php?success=true');
        exit;
    }
}


