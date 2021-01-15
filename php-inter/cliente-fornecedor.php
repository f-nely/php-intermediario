<?php

use Treinaweb\Classes\Cliente;
use Treinaweb\Classes\Fornecedor;

require_once 'vendor/autoload.php';

$cli = new Cliente();
$cli->defineCodigo(12);
$cli->defineNome("Taylon");
$cli->defineEmail("taylon@gmail.com");

$cli->exibe();

$fornecedor = new Fornecedor();
$fornecedor->defineCodigo(123);
$fornecedor->defineNome("Microsoft");
$fornecedor->defineEmail("microsoft@msn.com");

$fornecedor->exibe();