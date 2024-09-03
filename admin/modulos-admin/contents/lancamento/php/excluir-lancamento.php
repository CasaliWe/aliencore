<?php

require '../../../../config/bootstrap.php';
use Repositories\LancamentoRepository;

$id = filter_input(INPUT_POST, 'id-projeto', FILTER_SANITIZE_SPECIAL_CHARS);


$res = LancamentoRepository::delete($id);

if ($res) {
    header('Location: ../../../../lancamento.php?delete=true');
} else {
    header('Location: ../../../../lancamento.php?error=true');
}