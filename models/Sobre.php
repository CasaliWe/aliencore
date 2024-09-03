<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model {
    protected $table = 'sobre';
    protected $fillable = [
        'texto_sobre',
        'imagem_sobre'
    ];
    public $timestamps = false;
}