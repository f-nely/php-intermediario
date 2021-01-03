<?php

declare(strict_types=1);

/*
 * Passagem de variáveis por referência
 * É possível passar variáveis para funções por referência,
 * tornando-as aptas a modificar seus valores.
 */
function foo(int &$var): void
{
    $var++; // Incrementa $var
    var_dump($var); // 10
}

// Inicializa a variável $valor
$valor = 9;

// Passa a variável $valor para a função foo()
foo($valor);

// Imprime o valor da variável $valor
var_dump($valor); // 10


$a = 20;
$b =& $a;

unset($b); // Remove a variável referência $b

// Imprime o valor de $a
var_dump($a);