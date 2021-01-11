<?php

function filtraArray($valor): int
{
    return ($valor > 8);
}

$valores = [6, 7, 8, 9, 10, 3, 2, 11, 12];

// Filtra o Array removendo todos os valores menores que 8
$novosValores = array_filter($valores, "filtraArray");

// Imprime o novo array
//print_r($novosValores);

// função anônima
$myArray = [6, 7, 8, 9, 10, 3, 2, 11, 12];
$saida = array_filter($myArray, function ($valor) {
    return $valor > 8;
});

// Imprime o novo array
//print_r($saida);


$entrada = [6, 7, 8, 9, 10, 3, 2, 11, 12];

array_walk($entrada, function (&$v) {
    if ($v < 8) {
        // variável alterada por referencia
        $v *= 20;
    }
});

// Imprime o novo array
//print_r($entrada);

/*
 * Funções anônimas também podem ser armazenadas diretamente em variáveis.
 * Quando uma função anônima é explicitamente declarada em uma variável,
 * deve-se usar ponto e vírgula após a declaração da última chave }.
 */
$saudacao = function ($str) {
    return "Hello World, {$str}!";
};

//echo $saudacao("boa noite");

/*
 * Closure são funções anônimas com a função de importar variáveis
 * (por referência ou não) para dentro delas, usando um operador chamado use.
 */
$saudacao = "Hello, World!";

// Define a função
$closure = function () use ($saudacao) {
    //echo $saudacao;
};

// Chama a função
$closure();

/*
 * A diferença entre Lambda e Closures no PHP: Funções Lambda são anônimas "simples" e Closures
 * são anônimas que conseguem interagir com as variáveis fora de seu escopo, usando o operador use.
 */
$saudacao = "Hello, World!";

// Define a função
$closure = function () use ($saudacao) {
    $saudacao = "Novo texto.";
    return $saudacao;
};

// Imprime o resultado da função
var_dump($closure());

// Imprime o valor da variável global 'saudacao'
var_dump($saudacao);

// Outro exemplo que usa o conceito de Closure:
$config = ["parsear" => TRUE];

$formata = function ($html) use ($config) {
    if ($config["parsear"] === TRUE) {
        $html = preg_replace('/\[b](.*?)\[\/b]/', '<b>$1</b>', $html);
    }
    return $html;
};

echo $formata('[b]TreinaWeb Cursos[/b]');
echo "<br>";

$add = function ($valor) {
    return function ($outro_valor) use ($valor) {
        return $outro_valor + $valor;
    };
};

$var1 = $add(4);
echo $var1(11);