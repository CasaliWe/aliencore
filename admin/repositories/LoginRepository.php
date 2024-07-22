<?php
namespace Repositories;

require __DIR__ .'/../models/Login.php';
use Models\Login;

class LoginRepository {
    public function getLogin() {
        return Login::where('idlogin', '1')->first();
    }
}