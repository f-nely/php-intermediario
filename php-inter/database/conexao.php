<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP Intermediário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

<?php

$conexao = new Mysqli('localhost', 'root', '', 'php_inter');

if ($conexao->connect_errno) {
    exit(utf8_encode($conexao->connect_error));
}

$resultado = $conexao->query('SELECT * FROM funcionario');

if ($conexao->errno) {
    exit(utf8_encode($conexao->error));
}


/*while ($funcionario = $resultado->fetch_assoc()) {
    echo $funcionario['nome'] . "<br>";
}
  while ($funcionario = $resultado->fetch_array()) {
    echo $funcionario[1] . "<br>";
    echo $funcionario['nome'];
}
  while ($funcionario = $resultado->fetch_object()) {
    echo $funcionario->nome . "<br>";
}
*/

// Informações sobre as colunas do select
//var_dump($resultado->fetch_fields());

// Resgata todos os dados sem precisar de while
//$funcionarios = $resultado->fetch_all();
//var_dump($funcionarios);

echo $resultado->num_rows;


