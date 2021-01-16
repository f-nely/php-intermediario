<?php


namespace Treinaweb\Classes;


class Cliente extends Pessoa
{
    private string $cpf;

    public function defineCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function exibe()
    {
        echo "Dados do Cliente<br>";
        parent::exibe();
        echo "CPF: $this->cpf <br>";
    }
}