<?php

//$_GET

//vamos usar outro endereço
//http://localhost/PHP/061_$_GET/index_2.php?id=100

//para captar um determinado valor da query string, recorremos a chave do array associativo da super global $_GET

echo $_GET['id'];

//cuidado, se a variável não existir vai surgir um erro
echo '<br>';
echo $_GET['teste'];

//devemos sempre verificar se existe e depois captar esse parâmetro

$valor = null;
if(isset($_GET['teste'])){
    $valor = $_GET['teste'];
}

echo '<br>';
echo "Valor: $valor";