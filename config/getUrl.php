<?php 

    // Obtém a URL atual
    $urlAtual = $_SERVER['REQUEST_URI'];

    $linkAtivoIndex = null;
    $linkAtivoSobre = null;
    $linkAtivoGaleria = null;
    $linkAtivoNoticias = null;
    $linkAtivoNoticias = null;
    $linkAtivoAgenda = null;

    // Devolve o nome da página atual
    if(strpos($urlAtual, 'index') !== false){
        $pagAtual = 'Início';
        $linkAtivoIndex = '_pag-ativa';
    }else if(strpos($urlAtual, 'sobre') !== false){
        $pagAtual = 'Sobre';
        $linkAtivoSobre = '_pag-ativa';
    }else if(strpos($urlAtual, 'galeria') !== false){
        $pagAtual = 'Galeria';
        $linkAtivoGaleria = '_pag-ativa';
    }else if(strpos($urlAtual, 'noticias') !== false){
        $pagAtual = 'Notícias';
        $linkAtivoNoticias = '_pag-ativa';
    }else if(strpos($urlAtual, 'noticia') !== false){
        $pagAtual = 'Notícia';
        $linkAtivoNoticias = '_pag-ativa';
    }else if(strpos($urlAtual, 'agenda') !== false){
        $pagAtual = 'Agenda';
        $linkAtivoAgenda = '_pag-ativa';
    }else{
        $pagAtual = 'Início';
        $linkAtivoIndex = '_pag-ativa';
    }