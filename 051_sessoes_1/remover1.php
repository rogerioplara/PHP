<?php
session_name('minha_sessao');
session_set_cookie_params(180); //número de segundos
session_start();
unset($_SESSION['nome']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover nome</title>
</head>
<body>
    <?php require_once 'nav.php' ?>

    <hr>
    <h2>Valor de 'nome' removido da sessão.</h2>
</body>
</html>