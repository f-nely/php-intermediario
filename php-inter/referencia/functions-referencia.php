<?php
declare(strict_types=1);

/*
 * Funções que recebem variáveis por referência
 * Algumas funções nativas do PHP recebem variáveis por referência.
 * Entre elas, destaque para as funções para ordenação de Arrays.
 * Observe que a função ksort() não retorna um novo array. Ela
 * recebe o array informado por referência e o modifica.
 */
// Array
$cursos = [
    3 => "PHP Intermediário",
    1 => "PHP Básico",
    7 => "PHP Orientado a Objetos",
    4 => "PHP Avançado"
];

// Ordena o array pelas chaves em ordem crescente
ksort($cursos);

// Imprime o Array
var_dump($cursos);


// Define a função
function removerChave(&$array, $item): bool
{
    if (isset($array[$item])) {
        unset($array[$item]);
        return true;
    }

    return false;
}

// Define o array
$carros = [
    "uno" => [
        "ano" => 2015,
        "motor" => 1.0
    ],
    "vectra" => [
        "ano" => 2011,
        "motor" => 1.6
    ],
    "hb20" => [
        "ano" => 2015,
        "motor" => 1.6
    ]
];

if (removerChave($carros, "uno")) {
    var_dump($carros);
} else {
    echo "O valor informado não existe no Array.";
}