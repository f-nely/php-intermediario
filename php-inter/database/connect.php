<?php

    // Instancia a classe mysqli passando os dados de conexão
    $db = new mysqli('127.0.0.1', 'root', '', 'php_inter');

    // Define qual é a codificação de caracteres utilizada pela base de dados
    $db->set_charset('utf8');

    // Verifica se houve algum erro durante a conexão
    if($db->connect_errno > 0) {
        die('Não foi possível realizar a conexão [' . $db->connect_error . ']');
    }

    // Realiza a primeira consulta ao banco de dados
    $sql = 'SELECT id, nome, email FROM funcionario';

    if( ! $resultado = $db->query($sql)) {
        die('Erro ao executar a query [' . $db->error . ']');
    }

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!--<table border="1">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>E-mail</td>
    </tr>
    <?php /*while($campo = $resultado->fetch_assoc()): */?>
        <tr>
            <td><?/*=$campo['id'];*/?></td>
            <td><?/*=$campo['nome'];*/?></td>
            <td><?/*=$campo['email'];*/?></td>
        </tr>
    <?php /*endwhile */?>
</table>-->

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
    </tr>
    </thead>
    <tbody>
    <?php while($campo = $resultado->fetch_assoc()): ?>
    <tr>
        <td><?=$campo['id'];?></td>
        <td><?=$campo['nome'];?></td>
        <td><?=$campo['email'];?></td>
    </tr>
    <?php endwhile ?>

    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
