<?php

try {
    $pdo = new PDO('mysql:dbname=php_inter', 'root', '704802', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $stmt = $pdo->query('SELECT * FROM funcionario');

    /*foreach ($stmt as $funcionarios) {
        //var_dump($funcionarios);
        echo $funcionarios->endereco . "<br>";
        //echo $funcionarios['nome'] . "<br>";
        //echo $funcionarios[1] . "<br>";
    }*/

    /*$funcionarios = $stmt->fetchAll();
    var_dump($funcionarios);*/

    $funcionarios = $stmt->rowCount();
    echo $funcionarios;


} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}

