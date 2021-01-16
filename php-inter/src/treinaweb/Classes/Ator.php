<?php


namespace Treinaweb\Classes;


abstract class Ator
{
    protected int $vida = 100;

    public function tomarDano(): void
    {
        $this->vida -= 15;
    }
}