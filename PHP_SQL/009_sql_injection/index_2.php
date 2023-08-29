<?php

//dados de ligação
$database = 'udemy_loja_online';
$usuario = 'user_loja_online';
$senha = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $usuario, $senha);

$username = $_POST['text_username'];
$passwrd = $_POST['text_password'];

$sql = "SELECT * FROM usuarios WHERE username = '$username' AND passwrd = '$passwrd'";

$resultados = $ligacao->query($sql)->fetchAll(PDO::FETCH_OBJ);

$ligacao = null;

echo '<pre>';
print_r($resultados);
echo '</pre>';

if (count($resultados) == 0) {
    echo "Login Inválido";
} else {
    echo "Login OK";
}

// agora vamos colocar a seguinte expressão no password: ' or ''='
// dessa forma vai trazer todos os usuários e suas senhas por meio de uma consulta sql simples

echo '<br><br>' . $sql;
