<?php

$a = 5;
$b = 5;

$c = $a + $b;

var_dump($c); // 10

$a = 10;
$b = 10;

/*
 * Uma operação normal, pois, por padrão, em uma atribuição comum, apenas os valores
 * das variáveis são copiados. Se ao decorrer da execução do programa os valores das
 * variáveis $a e $b forem alterados, isso não afetará a soma feita anteriormente na
 * variável $c.
 */
var_dump($c); // 10


$a = 5;
$b =& $a; // $b referencia $a

// Imprimimos $b
var_dump($b); // 5

// Alteramos o valor de $a
$a = 25;

/*
 * As variáveis $a e $b apontam para o mesmo lugar. No decorrer da execução do exemplo,
 * o valor de $a foi alterado e foi impresso $b, que foi o mesmo valor de $a.
 * Foi feita uma atribuição por referência, e o operador usado foi:
 * =& (sinal de igual mais "e comercial").
 * Este é o “famoso” operador de atribuição por referência.
 */
// Novamente imprimimos $b
var_dump($b); // 25

