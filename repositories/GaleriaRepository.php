<?php
namespace Repositories;

use Models\GaleriaEvento;
use Models\ImagemEvento;

class GaleriaRepository {

        // pegando all
        public static function get() {
            return GaleriaEvento::with('imagemEvento')->get();
        }

        // criando evento
        public static function create($nome_evento, $data_evento) {
            $dados = [
                'nome_evento' => $nome_evento,
                'data_evento' => $data_evento
            ];
            $res = GaleriaEvento::create($dados);

            if($res) {
                return true;
            } else {
                return false;
            }
        }

        // criando imagens
        public static function createImagensGaleria($id, $nomesArquivos) {
            foreach ($nomesArquivos as $nomeArquivo) {
                ImagemEvento::create([
                    'imagem' => $nomeArquivo,
                    'evento_id' => $id
                ]);
            }

            return true;
        }

        // deletar evento
        public static function delete($id) {
            $evento = GaleriaEvento::find($id);
            $imagens = $evento->imagemEvento;

            foreach ($imagens as $img) {
                $filePathDesk = __DIR__.'/../admin/assets/imagens/arquivos/galeria/' . $img->imagem;
                if (file_exists($filePathDesk)) {
                    unlink($filePathDesk);
                }

                $img->delete();
            }

            $res = $evento->delete();

            if($res) {
                return true;
            } else {
                return false;
            }
        }

        // editar evento
        public static function update($id, $nome, $data) {
            $res = GaleriaEvento::where('id', $id)
                ->update([
                    'nome_evento' => $nome,
                    'data_evento' => $data
                ]);

            if($res) {
                return true;
            } else {
                return false;
            }
        }

        // deletar imagem
        public static function deleteImg($id) {
            $img = ImagemEvento::find($id);
            $filePathDesk = __DIR__.'/../admin/assets/imagens/arquivos/galeria/' . $img->imagem;
            if (file_exists($filePathDesk)) {
                unlink($filePathDesk);
            }

            $res = $img->delete();

            if($res) {
                return true;
            } else {
                return false;
            }
        }
        
}