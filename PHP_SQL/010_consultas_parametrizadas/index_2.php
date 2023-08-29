<?php

//dados de ligação
$database = 'udemy_loja_online';
$usuario = 'user_loja_online';
$senha = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $usuario, $senha);

//parametros para realizar a consulta sql
$parametros = [
    ':u' => $_POST['text_username'],
    ':p' => $_POST['text_password'],
];

//dessa forma, insere um layer de segurança no acesso aos dados -> o próprio PDO faz essa segurança
//a query é parametrizada e sanitizada para realizar a consulta
$comando = $ligacao->prepare("SELECT * FROM usuarios WHERE username = :u AND passwrd = :p");
$comando->execute($parametros);
$resultados = $comando->fetchAll(PDO::FETCH_OBJ);

echo '<pre>';
print_r($resultados);
echo '</pre>';

if (count($resultados) == 0) {
    echo "Login Inválido";
} else {
    echo "Login OK";
}

// agora vamos colocar a seguinte expressão no password: ' or ''='

//nesse caso não vai trazer nenhuma informação