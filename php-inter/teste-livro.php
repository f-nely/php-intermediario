<?php

use Treinaweb\Classes\Livro;

require_once 'vendor/autoload.php';

$livro1 = new Livro();

$livro1->codigo = 8;
$livro1->titulo = "Senhor dos Anéis";
$livro1->autor = "JFF Tolkien";
$livro1->valor = 99.90;

$livro1->cadastrar();
$livro1->mostrar();

var_dump($livro1);