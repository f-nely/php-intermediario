<?php

use Treinaweb\Classes\Cliente;

require_once 'vendor/autoload.php';

$cli = new Cliente();
try {
    $cli->defineNome('Taylon');
    $cli->defineEmail('taylon@laravel.com');
} catch (Exception $exception){
    echo $exception->getMessage();
}


var_dump($cli);