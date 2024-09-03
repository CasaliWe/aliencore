<?php
namespace Repositories;

use Models\Noticias;

class NoticiasRepository {

    public static function getAll(){
        return Noticias::orderBy('id', 'desc')->get();
    }

    public static function create($titulo, $descri, $link, $imagem){

        $dados = [
            'titulo' => $titulo,
            'descricao' => $descri,
            'link' => $link,
            'imagem' => $imagem
        ];
        $res = Noticias::create($dados);

        if($res){
            return true;
        } else {
            return false;
        }

    }

    public static function delete($id){
        $projeto = Noticias::find($id);
        $res = $projeto->delete();

        if($res){
            return true;
        } else {
            return false;
        }
    }

    public static function update($dados, $id){
        $update = Noticias::where('id', $id)->update($dados);

        if($update){
            return true;
        } else {
            return false;
        }
    }
    
}