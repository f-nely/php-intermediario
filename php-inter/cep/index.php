<?php

$cep = $_GET['cep'];
$xml = file_get_contents("http://api.postmon.com.br/v1/cep/$cep?format=xml");

$endereco = new SimpleXMLElement($xml);

echo "Logradouro {$endereco->logradouro}";
echo "<br>Bairro {$endereco->bairro}";
echo "<br>Cidade {$endereco->cidade}";
echo "<br>Estado {$endereco->estado}";

/*
 * http://localhost:8000/cep?cep=23894826
 */