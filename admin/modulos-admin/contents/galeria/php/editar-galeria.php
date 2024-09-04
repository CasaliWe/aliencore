<?php

require '../../../../config/bootstrap.php';
use Repositories\GaleriaRepository;

$id = filter_input(INPUT_POST, 'id_evento_editar', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, 'nome_evento_editar', FILTER_SANITIZE_SPECIAL_CHARS);
$data = filter_input(INPUT_POST, 'data_evento_editar', FILTER_SANITIZE_SPECIAL_CHARS);

$res = GaleriaRepository::update($id, $nome, $data);
if ($res) {
    header('Location: ../../../../galeria.php?success=true');
} else {
    header('Location: ../../../../galeria.php?error=true');
}
