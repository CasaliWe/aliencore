<?php
namespace Repositories;

use Models\Integrantes;

class IntegrantesRepository {

    public static function getAll(){
        return Integrantes::all();
    }

    public static function create($titulo, $descri, $link, $imagem){

        $dados = [
            'titulo' => $titulo,
            'descricao' => $descri,
            'link' => $link,
            'imagem' => $imagem
        ];
        $res = Integrantes::create($dados);

        if($res){
            return true;
        } else {
            return false;
        }

    }

    public static function delete($id){
        $projeto = Integrantes::find($id);
        $res = $projeto->delete();

        if($res){
            return true;
        } else {
            return false;
        }
    }

    public static function update($dados, $id){
        $update = Integrantes::where('id', $id)->update($dados);

        if($update){
            return true;
        } else {
            return false;
        }
    }
    
}