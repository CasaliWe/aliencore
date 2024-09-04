<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class ImagemEvento extends Model {
    protected $table = 'imagem_evento';
    protected $fillable = [
        'imagem',
        'evento_id'
    ];
    public $timestamps = false;

    public function galeriaEvento()
    {
        return $this->belongsTo(GaleriaEvento::class, 'evento_id');
    }
}