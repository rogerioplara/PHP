<?php

/*
Ao invés de utilizar o método fetchAll(); sem qualquer parâmetor, podemos especificar de que forma queremos os dados

Vale também para o fetch();

PDO::FETCH_BOTH - É a opção padrão. Por isso traz as chaves numéricas e alfanuméricas mistruradas

PDO::FETCH_NUM - Apenas o array com chaves numéricas com índice 0. É atribuída uma chave numérica sequencial a cada coluna

PDO::FETCH_ASSOC - Apenas o array associativo. As chaves são os nomes das colunas da tabela

PDO::FETCH_OBJ - Retorna os valores organizados num objeto anônimo em que cada elemento contém as propriedades com os nomes das colunas das tabelas.

Existem outras opções, porém estas são as mais comuns
*/

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_OBJ);


$ligacao = null;

echo '<pre>';
print_r($resultados);
