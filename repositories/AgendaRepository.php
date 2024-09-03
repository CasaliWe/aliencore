<?php
namespace Repositories;

use Models\Agenda;

class AgendaRepository {

    public static function getEventos() {
        return Agenda::all();
    }

    public static function createEvento($link, $url) {
        $res = Agenda::create([
            'link' => $link,
            'url' => $url
        ]);

        if($res) {
            return true;
        }else{
            return false;
        }
    }

    public static function update($id, $link, $url) {
        $res = Agenda::where('id', $id)->update([
            'link' => $link,
            'url' => $url
        ]);

        if($res) {
            return true;
        }else{
            return false;
        }
    }

    public static function delete($id) {
        $res = Agenda::where('id', $id)->delete();

        if($res) {
            return true;
        }else{
            return false;
        }
    }
}