<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model {
    protected $table = 'noticias';
    protected $fillable = [
        'titulo',
        'descricao',
        'link',
        'imagem'
    ];
    public $timestamps = false;
}