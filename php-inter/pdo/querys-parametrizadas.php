<?php

try {
    $pdo = new PDO('mysql:dbname=php_inter', 'root', '704802', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);

    $id = $_GET['id'];

    $stmt = $pdo->prepare('SELECT * FROM funcionario WHERE id=? OR nome=?');

    $stmt->execute([$id, 'Pedro']);

    $funcionarios = $stmt->fetchAll();

    var_dump($funcionarios);

} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}