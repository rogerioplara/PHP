<?php

/*
Podemos definir uma classe Produtos, cujas propriedades são as mesmas das colunas das tabelas.
O resultado pode ser algo do tipo:
*/

class Produto
{
    public $id;
    public $produto;
    public $preco_unidade;
}

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_CLASS, 'Produto');


$ligacao = null;

echo '<pre>';
print_r($resultados);

/*
Agora os resultados vem em forma de Produto Object
O carregamento dos dados para a classe é feito com a instanciação implícita de um objeto. Sabemos que uma
instanciação permite a execução automática do método __construct
*/