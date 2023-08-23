<?php

$erro = ""; // variáveis de controle de erro e sucesso
$sucesso = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){ // verifico se existe um request do tipo post
    
    if(empty($_POST['text_valor'])){ // se o request do tipo post text_valor estiver vazio, gera erro e adiciona a variavel
        $erro = "Campo de texto vazio.";
    } else { // se o request do tipo post text_valor não for vazio, segue

        $valor = $_POST['text_valor']; // adiciona o post do form na variável $valor

        if(is_numeric($valor)){ // checa se é numérico e cria/append o arquivo
            $file = fopen('dados_numericos.txt', 'a'); //modo 'a' significa append
            fputs($file, $valor . PHP_EOL);
            fclose($file);
            $sucesso = "Valor numérico adicionado com sucesso.";
        } elseif(is_string($valor)){ // checa se é string e cria/append o arquivo
            $file = fopen('dados_string.txt', 'a'); //modo 'a' significa append
            fputs($file, $valor . PHP_EOL);
            fclose($file);
            $sucesso = "Valor string adicionado com sucesso.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 04</title>
</head>

<body>

    <form action="index.php" method="post">
        <input type="text" name="text_valor">
        <input type="submit" name="Enviar">
    </form>

    <div>
        <?= !empty($erro) ? $erro : $sucesso ?>
        <!-- Se a variável erro não estiver vazia (já gerou o erro) -> imprime o erro -->
        <!-- Se a variável erro estiver vazia, imprime o que foi enviado no form -->
    </div>

</body>

</html>