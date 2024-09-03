<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model {
    protected $table = 'agenda';
    protected $fillable = [
        'link', 
        'url'
    ];
    public $timestamps = false;
}