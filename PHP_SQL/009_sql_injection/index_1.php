<?php

//SQL INJECTION - O PROBLEMA DE SEGURANÇA

/*
Nos recursos dessa aula, vamos adicioar a tabela usuarios.sql à base de dados udemy_loja_online.

Adicionaremos 3 usuários para simular um sistema de login e verificar as possíveis fragilidades que podem
e vão comprometer a segurança da aplicação
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index_2.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="text_username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" name="text_password">
        </div>
        <div>
            <input type="submit" value="Enter">
        </div>
    </form>

</body>

</html>