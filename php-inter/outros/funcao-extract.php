<?php

$nome = 'Taylon';

$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

/*
 * extract — Importa variáveis para a tabela de símbolos a partir de um array.
 * extract() verifica cada chave e vê se ela tem um nome válido nome de variável.
 * Também verifica por colisões com já existente variáveis na tabela de símbolo.
 */
extract($dados, EXTR_PREFIX_ALL, 'extr1');

// Acessa as variáveis criadas dinamicamente
echo $nome . PHP_EOL;
echo $extr1_nome . PHP_EOL;
echo $extr1_email . PHP_EOL;
echo $extr1_telefone . PHP_EOL;
echo $extr1_site;