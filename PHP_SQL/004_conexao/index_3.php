<?php

/*
O PDO contém mecanismos que nos permitem identificar e tratar
os erros de conexão, para enventualidade de ocorrerem
*/

//definir as propriedades da ligação
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

try {

    //instanciando a nova ligação
    $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

    //verificar se a ligação foi estabelecida corretamente
    $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado;

    $ligacao = null;
} catch (PDOException $err) {
    echo 'ERRO: ' . $err->getMessage();
}

// vamos deliberadamente colocar um erro no nome da base de dados

/*
O bloco catch pegou uma PDOException
Esta exceção contém impormações precisas sobre o erro
contém um código e uma mensagem
*/