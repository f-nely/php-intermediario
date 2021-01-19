<?php

// Abre o documento XML e retorna um objeto de sua estrutura parseada (analisada)
$livraria = simplexml_load_file('livraria.xml');

// Imprime os livros
/*foreach ($livraria->livro as $livro) {
    printf('Título: %s <br> Valor: %s <br><br>', $livro->titulo, $livro->valor);
}*/

foreach( $livraria->livro as $livro ) {
    echo $livro->valor->attributes()[0] . '<br>';
}