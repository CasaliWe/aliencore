<?php

require '../../../../config/bootstrap.php';
use Repositories\AgendaRepository;

// pegando dados do post
$link = $_POST['link_footer'];
$url = $_POST['url_footer'];

// buscando todos os links para verificar se já tem o número máximo cadastrado
$res = AgendaRepository::getEventos();
if(count($res) > 5){
    header('Location: ../../../../agenda.php?limite=true');
    exit;
}

// criando novo
$resCreate = AgendaRepository::createEvento($link, $url);
if($resCreate){
    header('Location: ../../../../agenda.php?create=true');
}else{
    header('Location: ../../../../agenda.php?error=true');
}
