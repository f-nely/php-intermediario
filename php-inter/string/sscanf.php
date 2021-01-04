<?php

/*
 * a função sscanf() trabalha de forma análoga à sprintf(). Mas, ao invés de
 * formatar uma saída, ela interpreta a entrada de acordo com as regras
 * especificadas na string de formato e retorna um array com os dados interpretados.
 */
$dados = '123 456 789';
$formato = '%d %d %d';

var_dump(sscanf($dados, $formato));

$cpf = '346.271.751-08';
$formato = '%d.%d.%d-%d';

var_dump(sscanf($cpf, $formato));

$serial = 'SN/4335002';
$formato = 'SN/%d';

var_dump(sscanf($serial, $formato));