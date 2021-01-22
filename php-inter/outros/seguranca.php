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

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
        // $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
        //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_INT);
        //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $texto = $_POST['texto'];
        $float = ['decimal' => ','];
        /*if (filter_var($texto, FILTER_VALIDATE_FLOAT, ['options' => $float])) {
            echo "Float válido";
        }*/
        /*if (filter_var($texto, FILTER_VALIDATE_EMAIL)) {
            echo "Email válido";
        }*/
        /*if (filter_var($texto, FILTER_VALIDATE_IP)) {
            echo "IP válido";
        }*/
        $int = [
          'min_range' => -150,
          'max_range' => 300
        ];

        if (filter_var($texto, FILTER_VALIDATE_INT, ['options' => $int])) {
            echo "Número inteiro entre -150 até 300";
        }
    }
?>

<br>
<form action="teste.php" method="post">
    texto: <input type="text" value="<?=$texto?>" name="texto">
    <button>Enviar</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
