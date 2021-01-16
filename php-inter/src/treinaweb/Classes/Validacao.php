<?php


namespace Treinaweb\Classes;


class Validacao
{
    public static string $tipo = "Valor via static";
    public static function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function verdadeiro(bool $bool): bool
    {
        if ($bool) {
            return true;
        } else {
            return false;
        }
    }

    public static function getTipo(): string
    {
        return static::$tipo;
    }
}