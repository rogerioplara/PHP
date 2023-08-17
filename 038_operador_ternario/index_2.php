<?php

$erro = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Ternário</title>
    <style>
        .erro{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

        <div class="<?= $erro ? 'erro' : '' ?>">RESULTADO</div>
        <div class="">RESULTADO</div>

        <!-- 
            O mesmo que:

            <div class="erro">RESULTADO</div>
         -->
    
</body>
</html>