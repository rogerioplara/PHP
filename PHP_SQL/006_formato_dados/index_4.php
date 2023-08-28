<?php

/*
Podemos acescentar propriedades e métodos na classe e executar operações quando so dados são guardados.
Neste caso, foi adicionada uma pripriedade que não existe na base de dados.
*/

class Produto
{
    public $id;
    public $produto;
    public $preco_unidade;
    public $preco_de_uma_duzia;

    public function __construct()
    {
        $this->preco_de_uma_duzia = $this->preco_unidade * 12;
    }
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
