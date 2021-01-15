<?php

use Treinaweb\Classes\File;

require_once 'vendor/autoload.php';

$file = new File('teste1.txt');
$file->escreve('Hello world!');
