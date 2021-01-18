<?php
/*
 * O método diff() do objeto $data1, que compara as diferenças com
 * o objeto $data2, retorna um objeto da classe DateInterval
 */
$data1 = new DateTime("2018-03-12");
$data2 = new DateTime("2018-04-03");

$diferenca = $data1->diff($data2);

//var_dump($diferenca);
printf('%s dias', $diferenca->d);
echo "<br>";

/*
 * É possível calcular a diferença de horas, minutos e segundos.
 */
$hora1 = new DateTime("12:10:10");
$hora2 = new DateTime("16:20:10");

$diferenca = $hora1->diff($hora2);

vprintf("%d horas, %d minutos e %d segundos", [
    $diferenca->h,
    $diferenca->i,
    $diferenca->s
]);

$data1 = new DateTime();
$data1->setTimestamp(strtotime("-14 day"));

$data2 = new DateTime();
$data2->setTimestamp(strtotime("now"));

$diferenca = $data1->diff($data2);

var_dump($diferenca);


$data1 = new DateTime();
$data1->setTimestamp(1363316400);

$data2 = new DateTime();
$data2->setTimestamp(1364266800);

$diferenca = $data1->diff($data2);

var_dump($diferenca);