<?php

require '../../../../config/bootstrap.php';
use Repositories\GaleriaRepository;

$nome_evento = filter_input(INPUT_POST, 'nome-evento', FILTER_SANITIZE_SPECIAL_CHARS);
$data_evento = filter_input(INPUT_POST, 'data-evento', FILTER_SANITIZE_SPECIAL_CHARS);

$res = GaleriaRepository::create($nome_evento, $data_evento);
if ($res) {
    header('Location: ../../../../galeria.php?create=true');
} else {
    header('Location: ../../../../galeria.php?error=true');
}
