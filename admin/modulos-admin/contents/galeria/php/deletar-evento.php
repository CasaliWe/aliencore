<?php

require '../../../../config/bootstrap.php';
use Repositories\GaleriaRepository;

$id = filter_input(INPUT_POST, 'id_evento', FILTER_SANITIZE_SPECIAL_CHARS);

$res = GaleriaRepository::delete($id);
if ($res) {
    header('Location: ../../../../galeria.php?delete=true');
} else {
    header('Location: ../../../../galeria.php?error=true');
}
