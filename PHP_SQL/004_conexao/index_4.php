<?php

/*
Por padrão, o PDO vai emitir uma exceção quando houver erros
*/

//definir as propriedades da ligação
$database = 'udemy_loja_onlinex';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

try {

    //instanciando a nova ligação
    $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

    //definir o modo como os erros serão tratados
    //neste caso,sendo o padrão, indica que o modo de erro é
    //a apresentação de exceções.
    $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //verificar se a ligação foi estabelecida corretamente
    $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado;

    $ligacao = null;
} catch (PDOException $err) {
    //vamos ver o que o $err contém
    echo '<pre>';
    print_r($err);

    echo '<hr>';
    print_r($err->errorInfo);
    echo '</pre>';
}

// vamos deliberadamente colocar um erro no nome da base de dados

/*
O bloco catch pegou uma PDOException
Esta exceção contém impormações precisas sobre o erro
contém um código e uma mensagem
*/