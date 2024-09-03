<?php

require '../../../../config/bootstrap.php';
use Repositories\NoticiasRepository;

$id = filter_input(INPUT_POST, 'id-projeto', FILTER_SANITIZE_SPECIAL_CHARS);


$res = NoticiasRepository::delete($id);

if ($res) {
    header('Location: ../../../../noticias.php?delete=true');
} else {
    header('Location: ../../../../noticias.php?error=true');
}