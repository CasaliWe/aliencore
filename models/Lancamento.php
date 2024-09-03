<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model {
    protected $table = 'lancamento';
    protected $fillable = [
        'titulo',
        'descricao',
        'link',
        'imagem'
    ];
    public $timestamps = false;
}