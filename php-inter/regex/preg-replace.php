<?php

/*
 * preg_replace - substituindo dados
 *
 * Função utilizada para substituir trechos de uma string. Com ela também é possível
 * recuperar os subpadrões (grupos) diretamente na string de substituição, prefixando
 * seus índices com um cifrão $.
 */

$string = 'Os cachorros são engraçados!';
$expressao = '/cachorros/';
$substituir = "gatos";

//echo preg_replace($expressao, $substituir, $string);

$string = 'dog dog dog dog dog dog';
$expressao = '/dog/';
$substituir = "cat";

//echo preg_replace($expressao, $substituir, $string, 3);


header('Content-Type: text/html; charset=utf-8');

$string = 'dog dog bird bird fish fish fish';
$expressao = '/dog/';
$substituir = "cat";

echo preg_replace($expressao, $substituir, $string, 4, $contador);

echo "\n Número de substituições realizadas: {$contador}";