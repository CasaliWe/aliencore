<?php

require '../../../../config/bootstrap.php';
use Repositories\IntegrantesRepository;

$id = filter_input(INPUT_POST, 'id-projeto', FILTER_SANITIZE_SPECIAL_CHARS);


$res = IntegrantesRepository::delete($id);

if ($res) {
    header('Location: ../../../../integrantes.php?delete=true');
} else {
    header('Location: ../../../../integrantes.php?error=true');
}