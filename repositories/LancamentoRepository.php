<?php
namespace Repositories;

use Models\Lancamento;

class LancamentoRepository {

    public static function getAll(){
        return Lancamento::all();
    }

    public static function create($titulo, $descri, $link, $imagem){

        $dados = [
            'titulo' => $titulo,
            'descricao' => $descri,
            'link' => $link,
            'imagem' => $imagem
        ];
        $res = Lancamento::create($dados);

        if($res){
            return true;
        } else {
            return false;
        }

    }

    public static function delete($id){
        $projeto = Lancamento::find($id);
        $res = $projeto->delete();

        if($res){
            return true;
        } else {
            return false;
        }
    }

    public static function update($dados, $id){
        $update = Lancamento::where('id', $id)->update($dados);

        if($update){
            return true;
        } else {
            return false;
        }
    }
    
}