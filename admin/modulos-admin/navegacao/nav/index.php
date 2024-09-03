<?php
    // verificando qual página
    $urlAtual = $_SERVER['REQUEST_URI'];

    // titulos content páginas
    $tituloContentPagina = "";

    // link ativo página
    $activeDashboard = false;
    $activeBanners = false;
    $activeAgenda = false;
    $activeIntegrantes = false;

    // Devolve o nome da página atual
    if(strpos($urlAtual, 'dashboard') !== false){
        $tituloContentPagina = "Informações";
        $activeDashboard = true;
    }else if(strpos($urlAtual, 'banners') !== false){
        $tituloContentPagina = "Banners";
        $activeBanners = true;
    }else if(strpos($urlAtual, 'agenda') !== false){
        $tituloContentPagina = "Agenda";
        $activeAgenda = true;
    }else if(strpos($urlAtual, 'integrantes') !== false){
        $tituloContentPagina = "Integrantes";
        $activeIntegrantes = true;
    }else{
        $tituloContentPagina = "Informações";
        $activeDashboard = true;
    }
?>




<nav class="d-flex flex-column w-100 mt-5 pt-5 mt-lg-0 pt-lg-0">
    <a href="dashboard.php" class="link-nav-desktop <?= $activeDashboard ? 'active-link-desktop' : ''; ?>">Informações</a>
    <a href="banners.php" class="link-nav-desktop <?= $activeBanners ? 'active-link-desktop' : ''; ?>">Banners</a>
    <a href="agenda.php" class="link-nav-desktop <?= $activeAgenda ? 'active-link-desktop' : ''; ?>">Agenda</a>
    <a href="integrantes.php" class="link-nav-desktop <?= $activeIntegrantes ? 'active-link-desktop' : ''; ?>">Integrantes</a>
    <a class="link-nav-desktop"><?php include "modulos-admin/btn-logout/index.php"; ?></a>
</nav>