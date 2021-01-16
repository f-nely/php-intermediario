<!DOCTYPE html>
<?php

use Treinaweb\Classes\Cliente;
use Treinaweb\Classes\Fornecedor;

require_once 'vendor/autoload.php';

$cli = new Cliente();
$cli->defineCodigo(12);
$cli->defineNome("Taylon");
$cli->defineEmail("taylon@gmail.com");
$cli->defineCpf("866.707.160-95");

$cli->exibe();

$fornecedor = new Fornecedor();
$fornecedor->defineCodigo(123);
$fornecedor->defineNome("Microsoft");
$fornecedor->defineEmail("microsoft@msn.com");
$fornecedor->defineCnpj("75.095.583/0001-80");

$fornecedor->exibe();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>PHP Intermediário</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>