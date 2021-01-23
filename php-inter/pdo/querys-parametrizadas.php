<?php

try {
    $pdo = new PDO('mysql:dbname=php_inter', 'root', '704802', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);

    $id = $_GET['id'];

    $stmt = $pdo->prepare('SELECT * FROM funcionario WHERE id=:id AND nome=:nome');

    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':nome', 'Pedro', PDO::PARAM_STR);
    $stmt->execute();

    $funcionarios = $stmt->fetchAll();

    var_dump($funcionarios);

} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}