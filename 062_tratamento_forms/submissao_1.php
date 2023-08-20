<?php

//Este script vai tratar a submissão do formulário

//Se não houver uma submissão pelo método post, da acesso inválido
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso Inválido');
}

//busca o username e password
$username = isset($_POST['text_username']) ? $_POST['text_username'] : '';
$password = isset($_POST['text_password']) ? $_POST['text_password'] : '';

//verifica se o login é válido - simplificação básica
$user = [
    'username' => 'joao',
    'password' => 'aaa'
];

if($username == $user['username'] && $password == $user['password']){
    echo '<h1>LOGIN APROVADO</h1>';
}else {
    echo '<h1>LOGIN OK</h1>';
}

//link para retornar
echo '<a href="index_1.php">Voltar</a>';

//NOTA: eixste aspectos nesse script que são somente explicativos, não devem ser utilizados nem em pensamento