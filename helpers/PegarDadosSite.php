<?php

namespace Repositories;

require __DIR__ . '/../config/config.php';

//pegando contatos
use Repositories\ContatosRepository;
$contatos = ContatosRepository::getContatos();

//pegando endereco
use Repositories\EnderecoRepository;
$endereco = EnderecoRepository::getEndereco();

//pegando banners
use Repositories\BannersRepository;
$banners = BannersRepository::getAll();

//pegando sobre
use Repositories\SobreRepository;
$sobre = SobreRepository::get();

// pegando eventos
use Repositories\AgendaRepository;
$eventos = AgendaRepository::getEventos();

// pegando integrantes
use Repositories\IntegrantesRepository;
$integrantes = integrantesRepository::getAll();

// pegando lançamento
use Repositories\LancamentoRepository;
$lancamento = LancamentoRepository::getAll();

// pegando noticias
use Repositories\NoticiasRepository;
$noticias = NoticiasRepository::getAll();

// juntando todos os dados
$dados = [
    'contatos' => $contatos,
    'endereco' => $endereco,
    'banners' => $banners,
    'sobre' => $sobre,
    'eventos' => $eventos,
    'integrantes' => $integrantes,
    'lancamento' => $lancamento,
    'noticias' => $noticias
];