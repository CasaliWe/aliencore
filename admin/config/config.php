<?php

// importando o driver do banco de dados
include_once __DIR__ . '/bootstrap.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();


// ***********BASE URL ADMIN***********
$base_url = $_ENV['BASE_URL'] . 'admin/';


// ***********CONFIGURAÇÕES GERAIS DO ADMIN***********
$title_site = "Freeladev | Admin";
$descri_site = "Painel administrativo do site Freeladev";