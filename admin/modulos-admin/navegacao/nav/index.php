<?php
    // verificando qual página
    $urlAtual = $_SERVER['REQUEST_URI'];

    // titulos content páginas
    $tituloContentPagina = "";

    // link ativo página
    $activeDashboard = false;
    $activeConfig = false;
    $activeBanners = false;

    // Devolve o nome da página atual
    if(strpos($urlAtual, 'dashboard') !== false){
        $tituloContentPagina = "Informações";
        $activeDashboard = true;
    }else if(strpos($urlAtual, 'textos-imagens') !== false){
        $tituloContentPagina = "Texto e Imagens";
        $activeConfig = true;
    }else if(strpos($urlAtual, 'banners') !== false){
        $tituloContentPagina = "Banners";
        $activeBanners = true;
    }
?>




<nav class="d-flex flex-column w-100">
    <a href="dashboard.php" class="link-nav-desktop <?= $activeDashboard ? 'active-link-desktop' : ''; ?>">Informações</a>
    <a href="textos-imagens.php" class="link-nav-desktop <?= $activeConfig ? 'active-link-desktop' : ''; ?>">Textos e Imagens</a>
    <a href="banners.php" class="link-nav-desktop <?= $activeBanners ? 'active-link-desktop' : ''; ?>">Banners</a>
    <a href="manual" class="link-nav-desktop">Manul do Usuário</a>
    <a class="link-nav-desktop"><?php include "modulos-admin/btn-logout/index.php"; ?></a>
</nav>