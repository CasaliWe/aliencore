<?php
namespace Repositories;

require __DIR__ .'/../models/Endereco.php';
use Models\Endereco;

class EnderecoRepository {
    public function getOne() {
        return Endereco::where('idlogin', '1')->first();
    }
}