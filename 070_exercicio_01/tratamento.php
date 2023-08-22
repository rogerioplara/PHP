<?php
// require_once('index.php');
session_start();

//verificar se o acesso acontece via post
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso Inválido');
}

//verificar se os valores existem
if(empty($_POST['text_valor_1']) || empty($_POST['text_valor_2'])){
    $_SESSION['erro'] = "Os dois valoes são de preenchimento obrigatório";
    header("Location: index.php");
    return;
}

//verifica se são numéricos e positivos
$valor1 = $_POST['text_valor_1'];
$valor2 = $_POST['text_valor_2'];

if(!is_numeric($valor1) || !is_numeric($valor2) || $valor1 < 1 || $valor2 < 1){
    $_SESSION['erro'] = "Os dois valores devem ser numéricos e positivos";
    header("Location: index.php");
    return;
}
//resultado
$resultado = $valor2 * $valor2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado:</h1>
    <h3><?= "$valor1 x $valor2 = $resultado" ?></h3>
</body>
</html>
