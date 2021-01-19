<?php

/*// Instancia um novo objeto
$dom = new DOMDocument();

// Carrega o arquivo HTML
$dom->loadHTMLFile('treinaweb.html');

// Obtém o elemento de id igual a #titulo
$titulo = $dom->getElementById('titulo');
$titulos = $dom->getElementsByTagName('h2');

// Imprime o objeto retornado
print_r($titulo);*/


// Instancia um novo objeto
$dom = new DOMDocument();

// Carrega o arquivo HTML
$dom->loadHTMLFile('treinaweb.html');

// Seleciona todos os elementos h2
$titulos = $dom->getElementsByTagName('h2');

// Itera sobre os elementos encontrados
foreach ($titulos as $titulo) {
    // Imprime na tela
    print_r($titulo);
}