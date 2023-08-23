<?php

// TRATAMENTO DE FORMULÁRIOS - INTRODUÇÃO

/*
Uma das áreas onde o PHP tem uma utilização muito grande é no tratamento da submissão de formulários.
Quando tem um formulário em HTML e pretende que os dados preenchidos sejam tratados do lado do servidor para, eventualmente, serem armazenados numa base de dados, é aqui que o PHP entra no sistema

Introdução ao tratamento de formulários com PHP e a super global $_POST
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login</title>
    <style>
        .wrapper {
            margin: 50px auto;
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input{
            display: block;
            margin-bottom: 10px;
            padding: 5px;
            width: 100%;
        }
        input[type="submit"]{
            width: 100px !important;
            padding: 10px !important;
            margin: 0px auto;
        }
    </style>
</head>
<body>
    
    <div class="wrapper">
        <h3>LOGIN</h3>
        <form action="submissao_2.php" method="post">
            <label>Username</label>
            <input type="text" name="text_username">

            <label>Password</label>
            <input type="password" name="text_password">
            <input type="submit" value="Entrar">
        </form>
    </div>

</body>
</html>