<?php

$nome = 'Taylon';

$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

// Extrai os dados do array para variáveis
extract($dados, EXTR_SKIP);

// Acessa as variáveis criadas dinamicamente
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $site;