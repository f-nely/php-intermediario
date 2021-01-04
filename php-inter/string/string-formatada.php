<?php

$erro = [
    'tipo' => 'Email',
    'codigo' => '01',
    'descricao' => 'O remetente não foi informado.'
];

//echo "Tipo: " . $erro["tipo"] . ". Código: " . $erro["codigo"] . ". Descrição: " . $erro["descricao"];


$erro = [
    'tipo' => 'Email',
    'codigo' => '01',
    'descricao' => 'O remetente não foi informado.'
];

/*
 * sprintf — Retorna a string formatada
 */
$resultado = sprintf("Tipo: %s. Código: %s. Descrição: %s", $erro["tipo"], $erro["codigo"], $erro["descricao"]);

//echo $resultado;

/*
 * printf que não apenas formata, mas faz a função de print (imprimir na tela)
 */
//printf("Tipo: %s. Código: %s. Descrição: %s", $erro["tipo"], $erro["codigo"], $erro["descricao"] );

/*
 * vsprintf — Retorna uma string formatada
 * Funciona como sprintf mas aceita um array de argumentos, ao invés de um número variável de argumentos.
 */
$resultado = vsprintf("Tipo: %s. Código: %s. Descrição: %s", $erro);

//echo $resultado;

vprintf("Tipo: %s. Código: %s. Descrição: %s. Percentual: 20%%", $erro);


