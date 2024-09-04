<?php

require '../../../../config/bootstrap.php';
use Repositories\GaleriaRepository;

$id = $_GET['img'];

$res = GaleriaRepository::deleteImg($id);
if ($res) {
    header('Location: ../../../../galeria.php?delete=true');
} else {
    header('Location: ../../../../galeria.php?error=true');
}
