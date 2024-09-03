<?php

require '../../../../config/bootstrap.php';
use Repositories\AgendaRepository;

// pegando dados do post
$id = $_GET['id'];

// deletar link
$res = AgendaRepository::delete($id);
if($res){
    echo json_encode(['status' => true]);
}else{
    echo json_encode(['status' => false]);
}
