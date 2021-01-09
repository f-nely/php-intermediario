<?php

/*
 * preg_match - buscando e extraindo dados
 * Função usada para casar uma ER em uma string. Ela retorna TRUE se conseguiu casar
 * com sucesso, mas pode retornar todos os subpadrões capturados em um array, se o
 * terceiro argumento opcional for passado por referência.
 */

$name = "nelyf";
$regex = "/^[a-z0-9_]{5,20}$/i";

if (preg_match($regex, $name)) {
    echo "Nome de usuário válido.";
}
/*
 * Tipos genéricos
 * Os metacaracteres desse grupo são:
 * \d – Casa qualquer número.
 * \D - Casa qualquer caractere que não seja um número.
 * \h – Casa qualquer caractere de espaço em branco horizontal.
 * \H – Casa qualquer caractere que não seja de espaço em branco horizontal.
 * \s – Casa qualquer caractere de whitespace (espaço em branco), quebra de linha e tabulação.
 * \S – Casa qualquer caractere que não seja de espaço em branco.
 * \v – Casa qualquer caractere de espaço em branco vertical.
 * \V – Casa qualquer caractere que não seja de espaço em branco vertical.
 * \w – Casa qualquer caractere de letra, número ou underline (_).
 * \W – Casa qualquer caractere que não seja letra, número ou underline (_).
 */
$nome = 'TreinaWeb Cursos';
$regex = '/(\w+)\s(\w+)/i';

if (preg_match($regex, $nome, $array)) {
    print_r($array);
}

$data = '2014-06-07';
$regex = '/(\d{4})-(\d{2})-(\d{2})/';

if (preg_match($regex, $data, $resultado)) {
    echo "Dia: " . $resultado["3"] . "\n";
    echo "Mês: " . $resultado["2"] . "\n";
    echo "Ano: " . $resultado["1"];
}


$nome = 'TreinaWeb Cursos';
$regex = '/(?P<nome>\w+)\s(?P<sobrenome>\w+)/i';

if (preg_match($regex, $nome, $array)) {
    print_r($array);
}

// Validando um número de telefone
$telefone = '(99) 99999-9999';
$regex = '/^(\d{2}|\(\d{2}\))[ ]?\d{4,5}[ -]?\d{4}$/';

if (preg_match($regex, $telefone)) {
    echo "Passou.";
}

// Validando email
$email = 'contato@treinaweb.com.br';
$regex = '/^[^0-9][a-z0-9_]+([.][a-z0-9_]+)*[@][a-z0-9-_]+([.][a-z0-9]{2,3})*[.][a-z]{2,3}$/i';

if (preg_match($regex, $email)) {
    echo "Passou.";
}
/*
 * Classes de caracteres POSIX
 * Existem alguns curingas para usar em listas que facilitam, e muito, o trabalho. Eles são
 * chamados de POSIX, um padrão internacional que define esse tipo de regra.
 *
 * Conheça as classes POSIX disponíveis para as expressões regulares:
 *
 * [:lower:] similar a [a-z] – Letras minúsculas.
 * [:upper:] similar a [A-Z] – Letras maiúsculas.
 * [:alnum:] similar a [a-zA-Z0-9] – Letras e números.
 * [:alpha:] simular a [a-zA-Z] – Letras maiúsculas e minúsculas.
 * [:digit:] similar a [0-9] – Apenas números.
 * [:xdigit:] similar a [a-fA-F0-9] – Números hexadecimais.
 * [:punct:] similar a [,.!?:...] – Sinais de pontuação.
 * [:blank:] similar a [ \t] – Tab
 * [:space:] similar a [ \t\r\n\f\v] – Caracteres de espaço, incluindo tabs.
 * [:cntrl:] similar a [\x00-\x1F\x7F] – Caracteres de controle, por exemplo: enter.
 * [:graph:] equivalente a [\x21-\x7E] – Apenas caracteres imprimíveis, ou seja, espaços, tabs e caracteres de controle (enter) e etc. não entram neste grupo.
 * [:print:] equivalente a [\x20-\x7E] – Apenas caracteres imprimíveis e o espaço.
 */
$hora = '12:59';
$regex = '/^[[:digit:]]{2}:[[:digit:]]{2}$/';

if (preg_match($regex, $hora)) {
    echo "Passou.";
}