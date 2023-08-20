<?php

//Este script vai tratar a submissão do formulário de forma mais adequada

//Se não houver uma submissão pelo método post, da acesso inválido
if($_SERVER['REQUEST_METHOD'] != 'GET'){
    die('Acesso Inválido');
}

//users (simulação de informação em base de dados encriptados com uma hash)

$users = [
    // aaa
    'joao' => '$2y$10$541nZLM.qW9sEwCoDE4u7ex3MDEMcmwR38XN8vLBZeMbLjduTeY6S',
    // bbb
    'ana' => '$2y$10$d1fHPJ9AafNWJzxLrhgSCOIA0V8ejKgEi9w/b1.w21G9W5nnHkJlS',
    // ccc
    'carlos' => '$2y$10$9KSQq.ujwGOwMmJX7mGQ/erNHDJnzvZT6j7KHHzEw.xkTa1vY4s.O'
];

//busca o username e password
$username = isset($_GET['text_username']) ? trim($_GET['text_username']) : '';
$password = isset($_GET['text_password']) ? trim($_GET['text_password']) : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Result</title>
</head>

<body>

    <?php if (key_exists($username, $users)) : ?>

        <!-- password_verify() nativo do php -->
        <?php if(password_verify($password, $users[$username])):?>
            <h1>LOGIN OK!!!</h1>
        <?php else: ?>
            <h1>LOGIN INVÁLIDO</h1>
        <?php endif; ?>

    <?php else : ?>
        <h1>LOGIN INVÁLIDO</h1>
    <?php endif; ?>

    <a href="index_1.php">Voltar</a>

</body>

</html>