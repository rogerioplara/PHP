<?php

//Estrutura que utilizaremos no exercício

//dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password);

//carregar os dados em forma de array de objetos
$resultados = $ligacao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

//fechar a ligação
$ligacao = null;

/*
Imagine que será necessário conectar varias vezes à base de dados
Vamos melhorar nosso código, torná-lo modular.
Vamos criar uma classe que poderá ser utilizada em qualquer projeto

Queremos:
- uma classe que possa ser usada em qualquer projeto
- que permita efetuar todas as operações CRUD SQL
- que permita fazer queries básicas ou parametrizadas
- que permita configurar a ligação e a forma como os dados são devolvidos
- que controle erros e nos devolva essa informação
- que nos possa devolver outras informações relevantes

IMPORTANTE: Este exercício é um bom ponto de partida para criar uma classe própria. Poderá utilizar
esse código como ponto inicial -> será completamente funcional mas NÃO DEVERÁ SER USADO EM PRODUÇÃO
*/