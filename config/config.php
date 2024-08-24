<?php

require __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// **********CONEXÃO COM O DB**********
require __DIR__.'/db.php';

// ************* BASE URL *************
$base_url = $_ENV['BASE_URL'];

// ************* LINK FREELADEV *************
$freeladev = $_ENV['LINK_FREELADEV'];