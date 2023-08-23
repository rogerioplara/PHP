<?php

/*
Vamos simular uma mensagem de erro
Se a variável erro tiver conteúdo dentro dela, deverá ser apresentada a mensagem
Caso contrário, se a mensagem de erro estiver vazia, deverá aparecer a mensagem SUCESSO
*/

$mensagem_erro = '';

// regras de negócio devem estar dentro do PHP

$css = '';
$mensagem = null;
if(!empty($mensagem_erro)){
    $css = 'erro';
    $mensagem = $mensagem_erro;
} else {
    $css = 'sucesso';
    $mensagem = 'SUCESSO';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <style>
        .sucesso {
            color: white;
            background-color: darkgreen;
        }
        .erro{
            color: white;
            background-color: darkred;
        }
    </style>
</head>
<body>
    
    <div class="<?= $css ?>">
        <?= $mensagem ?>
    </div>

</body>
</html>