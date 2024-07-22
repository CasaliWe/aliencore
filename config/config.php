<?php

require __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


// ************* BASE URL *************
$base_url = $_ENV['BASE_URL'];