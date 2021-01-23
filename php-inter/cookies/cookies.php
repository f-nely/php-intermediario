<?php

if ($_SERVER['REQUEST_METHOD'] === 'Post') {
    setcookie('email', 'f.nelly@outlook.com', strtotime('+1 hour'));
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies em PHP</title>
</head>
<body>
    <form action="Post">
        <button>gravar</button>
    </form>
</body>
</html>