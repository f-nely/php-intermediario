<?php


namespace Treinaweb\Classes;


class Fornecedor extends Pessoa
{
    private string $cnpj;

    public function defineCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    public function exibe()
    {
        echo "<br>Dados do Fornecedor<br>";
        echo "Código: $this->codigo <br>";
        echo "Nome: $this->nome <br>";
        echo "Email: $this->email <br>";
        echo "CNPJ: $this->cnpj <br>";
    }
}