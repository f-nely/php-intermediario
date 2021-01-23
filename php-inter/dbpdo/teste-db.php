<?php

require_once 'Db.php';

$db = new Db('mysql', 'localhost', 'php_inter', 'root', '704802');

$funcionario = $db->select('SELECT * FROM funcionarios WHERE id < :id', ['id' => 5]);

var_dump($funcionario);