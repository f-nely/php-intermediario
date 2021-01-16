<?php

use Treinaweb\Classes\Validacao;

require_once 'vendor/autoload.php';

$val = new Validacao();

var_dump(Validacao::validaEmail('teste@hotmail.com'), Validacao::verdadeiro(true));

//echo Validacao::$tipo;

echo Validacao::getTipo();