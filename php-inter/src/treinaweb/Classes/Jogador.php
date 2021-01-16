<?php


namespace Treinaweb\Classes;


class Jogador extends Ator
{
    public function atirar()
    {
        echo "Atira no inimigo";
    }

    protected function defineVida()
    {
        $this->vida = 100;
    }
}