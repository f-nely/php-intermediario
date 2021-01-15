<?php

namespace Treinaweb\Classes;
class Livro
{
    public int $codigo;
    public string $titulo;
    public string $autor;
    public float $valor;

    public function cadastrar():void
    {
        echo "Cadastra $this->titulo no banco de dados<br>";
    }

    public function mostrar(): void
    {
        echo "Código: $this->codigo <br>";
        echo "Título: $this->titulo <br>";
        echo "Autor: $this->autor <br>";
        echo "Valor: $this->valor <br>";
    }
}