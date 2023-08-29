<?php

// MAIS SEGURANÇA COM CONSULTAS PARAMETRIZADAS

/*
Na aula anterior vimos uma das principais falhas no uso do PHp e sua conexão com MySQL:
SQL Injection

Para solucionar esse problema, vamos voltar ao mesmo exercício, mas dessa vez com a execução
da query de uma forma diferente
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