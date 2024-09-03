<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model {
    protected $table = 'banners';
    protected $fillable = [
        'banner_home_desktop', 
        'banner_home_mobile',
        'banner_lancamento_desktop', 
        'banner_lancamento_mobile',
        'banner_contato_desktop', 
        'banner_contato_mobile',
        'banner_galeria_desktop', 
        'banner_galeria_mobile',
        'banner_sobre_desktop', 
        'banner_sobre_mobile',
        'banner_agenda_desktop', 
        'banner_agenda_mobile',
        'banner_noticias_desktop', 
        'banner_noticias_mobile'
    ];
    public $timestamps = false;
}
