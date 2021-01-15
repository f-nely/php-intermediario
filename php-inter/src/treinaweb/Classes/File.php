<?php


namespace Treinaweb\Classes;


class File
{
    private $handle;

    public function __construct(string $arquivo)
    {
        $this->handle = fopen($arquivo, 'w+');

    }

    public function escreve(string $texto)
    {
        fwrite($this->handle, $texto);
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}