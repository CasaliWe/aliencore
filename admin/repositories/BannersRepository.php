<?php
namespace Repositories;

require __DIR__ .'/../models/Banners.php';
use Models\Banners;

class BannersRepository {
    public function getAll() {
        return Banners::all();
    }
}
