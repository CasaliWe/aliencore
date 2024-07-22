<?php
namespace Repositories;

require __DIR__ .'/../models/Contatos.php';
use Models\Contatos;

class ContatosRepository {
    public function getOne() {
        return Contatos::where('idlogin', '1')->first();
    }
}