<?php

// CONTROLAR COMUNICAÇÕES COM TRANSAÇÕES

/*
Para realizar esse controle:
adicionar um beginTransaction() antes de iniciar as comunicações.
Realizar as comunicações.
No final, se não houver erro, surge o commit()
O commit() vai consolidar na base de dados todas as comunicações definidas.

No caso de ocorrer um erro, como é o caso, as 3 primeiras inserções não vão ser aplicadas
porque vai ser disapara a exceção e, dentro do bloco do catch, temos um rollBack().

O rollBack() indica que tudo que foi inserido com sucesso dentro dessa transação será revertido
*/

//dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

try {
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user1', '111')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user2', '222')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user3', '333')");
    //erro, porém adiciona os anteriores
    $ligacao->exec("INSERT INTO users VALUES(0, 'user4', '444')");
} catch (PDOException $err) {
    echo "Ocorreu um erro no SQL!";
}
