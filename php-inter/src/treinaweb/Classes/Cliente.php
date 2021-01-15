<?php


namespace Treinaweb\Classes;


class Cliente
{
    private string $nome;
    private string $email;

    public function defineNome($nome): void
    {
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

        exit("Email inválido");
    }

    public function recuperaEmail(): string
    {
        return $this->email;
    }
}