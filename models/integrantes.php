<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model {
    protected $table = 'integrantes';
    protected $fillable = [
        'titulo',
        'descricao',
        'link',
        'imagem'
    ];
    public $timestamps = false;
}