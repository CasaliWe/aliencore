<?php
namespace Repositories;

use Models\Sobre;

class SobreRepository {

    public static function get(){
        return Sobre::where('id', 1)->first();
    }

    public static function update($dados){
        $update = Sobre::where('id', 1)->update($dados);

        if($update){
            return true;
        } else {
            return false;
        }
    }
    
}