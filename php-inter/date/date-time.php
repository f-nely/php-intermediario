<?php

/*
 * Outros métodos da DateTime
 * setDate() – Permite definir uma data em partes: Ano, mês e dia.
 * setTime() – Permite definir uma hora em partes: Horas, minutos, segundos.
 * Há também o método chamado getTimestamp(), que retorna o Unix timestamp da data e hora definidas.
 */

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

var_dump($data);

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

//echo $data->getTimestamp(); // 1363785615
//echo $data->format("d/m/Y"); // 20/03/2013
//echo $data->format("d/m H:i:s"); // 20/03 10:20:15

/*
 * o método modify() que modifica o timestamp da data, permitindo a soma
 * ou subtração de anos, meses, dias, horas, minutos e segundos.
 */
$data = new DateTime();
$data->modify("+2 day");

//echo $data->format("d/m/Y"); // A data daqui 2 dias.

/*
 * Subtrair ou somar uma data previamente definida também é possível.
 */

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

$data->modify("-2 days");

echo $data->format("d/m/Y"); // 18/03/2013