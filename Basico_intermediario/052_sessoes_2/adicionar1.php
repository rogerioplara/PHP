<?php
session_name('minha_sessao');
session_set_cookie_params(10); //número de segundos
session_start();
$_SESSION['nome'] = 'Rogerio';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar nome</title>
</head>
<body>
    <?php require_once 'nav.php' ?>

    <hr>
    <h2>Valor de 'nome' adicionado à sessão.</h2>
</body>
</html>