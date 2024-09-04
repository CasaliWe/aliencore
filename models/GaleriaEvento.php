<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class GaleriaEvento extends Model {
    protected $table = 'galeria_evento';
    protected $fillable = [
        'nome_evento',
        'data_evento'
    ];
    public $timestamps = false;

    public function imagemEvento()
    {
        return $this->hasMany(ImagemEvento::class, 'evento_id' , 'id');
    }
}