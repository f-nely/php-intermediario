<?php

$data = new DateTime("2018-02-12 16:42:33");
//echo $data->format("d/m/Y h:i");


$data = new DateTime("now"); // Retorna a data de hoje
//echo $data->format("d/m/Y H:i:s");


$data = new DateTime("+1 day"); // Retorna a data de amanhã
//echo $data->format("d/m/Y");

$data = new DateTime();

echo $data->format('Y/m/d h:i'); // Retorna a data de hoje