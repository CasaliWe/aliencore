<?php

require '../../../../config/bootstrap.php';
use Repositories\AgendaRepository;

// pegando dados do post
$id = $_POST['link_footer_id'];
$link = $_POST['link_footer_editar'];
$url = $_POST['url_footer_editar'];

// att
$res = AgendaRepository::update($id, $link, $url);
if($res){
    header('Location: ../../../../agenda.php?success=true');
}else{
    header('Location: ../../../../agenda.php?error=true');
}
