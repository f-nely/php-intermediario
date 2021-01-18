<?php


namespace Treinaweb\Classes;


class Pessoa
{
    protected int $codigo;
    protected string $nome;
    protected string $email;

    public function defineCodigo(int $codigo): void
    {
        $this->codigo = $codigo;
    }

    public function defineNome($nome): void
    {
        if (mb_strlen($nome, 'utf8') < 3) {
            throw new \Exception("Nome precisa ter mais de 5 caracteres");
        }
        $this->nome = $nome;
    }

    public function defineEmail($email)
    {
        $this->validarEmail($email);
    }

    public function validarEmail($email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        }

        throw new \Exception("Email inválido");
    }

    public function recuperaEmail(): string
    {
        return $this->email;
    }

    public function exibe()
    {
        echo "Código: $this->codigo <br>";
        echo "Nome: $this->nome <br>";
        echo "Email: $this->email <br>";
    }
}