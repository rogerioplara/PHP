<?php

// CONTROLAR COMUNICAÇÕES COM TRANSAÇÕES

/*
A transação é um mecanismo processual de comunicação com a base de dados no qual podemos efetuar
um conjunto de instruções SQL e, caso aconteça um erro, podemos "voltar atrás" nas execuções que foram
efetuadas. No caso de sucesso, podemos finalizar essas comunicações.
*/

//dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

try {
    $ligacao->beginTransaction();
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user1', '111')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user2', '222')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user3', '333')");
    //erro
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user4', '444')");
    //se estiver tudo certo, faz o commit
    $ligacao->commit();
} catch (PDOException $err) {
    //se ocorrer erro, faz o rollback
    $ligacao->rollBack();
    echo "Ocorreu um erro no SQL!";
}
