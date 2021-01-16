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
        parent::exibe();
        echo "CNPJ: $this->cnpj <br>";
    }
}