<?php


namespace Treinaweb\Classes;


abstract class Ator
{
    protected int $vida;

    public function __construct()
    {
        $this->defineVida();
    }

    protected abstract function defineVida();

    public function tomarDano(): void
    {
        $this->vida -= 15;
    }
}