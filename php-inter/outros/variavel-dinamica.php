<?php

/*
 * Variáveis dinâmicas
 * Variáveis dinâmicas, comumente chamadas de "variáveis variáveis", é um conceito
 * especial do PHP para a criação de variáveis a partir do valor de outras variáveis.
 */

$var = "nome";
$$var = "Treinaweb Cursos";

if (isset($nome)) {
    echo $nome;
}


// O array dos dados
$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

foreach ($dados as $chave => $valor) {
    // Cria a variável dinâmica com o nome da respectiva chave do array
    $$chave = $valor;
}

// Acessa as variáveis criadas dinamicamente
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $site;


// O array dos dados
$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

// Extrai os dados do array para variáveis
extract($dados);

// Acessa as variáveis criadas dinamicamente
echo $nome . "<br>";
echo $email . "<br>";
echo $telefone . "<br>";
echo $site;