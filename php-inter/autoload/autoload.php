<?php

function autoload1($classe)
{
    $path = __DIR__ . "\\classes\\$classe.php";
    if (file_exists($path)) {
        require $path;
        return true;
    }
    return false;
}

spl_autoload_register('autoload1');