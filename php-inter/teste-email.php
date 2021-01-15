<?php

use Treinaweb\Classes\Cliente;

require_once 'vendor/autoload.php';

$customer = new Cliente();
$customer->defineNome('Richard');

$customer->defineEmail('richard@gmail.com');
echo $customer->recuperaEmail();

var_dump($customer);