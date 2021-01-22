<?php

try {
    $pdo = new PDO('mysql:dbname=php_inter', 'root', '704802', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);

    $qtd = $pdo->exec("
        UPDATE funcionario
        SET telefone='00 0000-0000'
    ");

    echo "Registro(s) alterado(s): " . $qtd;

    $stmt = $pdo->query('SELECT * FROM funcionario');
    $funcionario = $stmt->fetchAll();
    var_dump($funcionario);

} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}