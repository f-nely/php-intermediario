<?php

$obj = new stdClass();

$obj->valor1 = "Um valor aqui 1";
$obj->valor2 = "Um valor aqui 2";
$obj->valor3 = "Um valor aqui 3";

var_dump($obj);

$arr_obj = (object) [
    "nome" => "Taylon",
    "endereço" => "Avenida Paulista",
    "telefone" => "11 xxxxx-xxxx"
];

//$obj2 = (object) $arr_obj;

var_dump($arr_obj);

foreach ($arr_obj as $item => $value) {
    echo "$item: $value <br>";
}