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
        echo "Código: $this->codigo <br>";
        echo "Nome: $this->nome <br>";
        echo "Email: $this->email <br>";
        echo "CPF: $this->cpf <br>";
    }
}