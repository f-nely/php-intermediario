<?php

$nomes = ['_Ana', 'Pedro', '_Carla', 'Fabio'];

$filtro = preg_grep('/^_/', $nomes);

//var_dump($filtro);

$texto = <<<TEXT
nome: Carlos <br>
data_nasc: 11/12/1988 <br>
data_cas: 20/02/2015 <br>
TEXT;

preg_match_all('#(?P<chave>.+): (?P<valor>.+) #', $texto, $match, PREG_SET_ORDER);

//var_dump($match);

$texto_novo = preg_replace_callback("#(\d{2})/(\d{2})/(\d+)#", function ($match){
    return "{$match[3]}-{$match[2]}-{$match[1]} 00:00:00";
}, $texto);

echo $texto_novo;

