<?php


namespace Treinaweb\Classes;


class Inimigo extends Ator
{
    public function darPorrada()
    {
        echo "Inimigo dá porrada";
    }

    protected function defineVida()
    {
        $this->vida = 150;
    }
}