<?php

use Treinaweb\Classes\Inimigo;
use Treinaweb\Classes\Jogador;

require_once 'vendor/autoload.php';

$jogador = new Jogador();
$jogador->tomarDano();
$jogador->atirar();

var_dump($jogador);

$inimigo = new Inimigo();
$inimigo->tomarDano();
$inimigo->darPorrada();

var_dump($inimigo);