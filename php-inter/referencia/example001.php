<?php

/*
 * O que são referências?
 * Em PHP, referência é uma variável que referencia o conteúdo de outra variável.
 * As referências são uma maneira de ter múltiplas variáveis, referenciando o mesmo
 * valor, apenas usando nomes diferentes de variáveis. É como se houvesse apenas um
 * espaço na memória, mas com vários apelidos para acessá-lo.
 * Por mais que seja parecido, referências não são como os ponteiros em C, que trabalham
 * diretamente com a memória. Ao contrário disso, existe uma tabela simbólica que armazena
 * as referências.
 */
$a = 5;
$b = 10;

/*
 * Com as referências é possível trabalhar com o mesmo dado (valor 5) usando
 * nomes diferentes, tanto com a variável $a quanto com a variável $b.
 */
$a = 5;
$b =& $a; // $b referencia $a