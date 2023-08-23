<?php

//CONSTRUCTOR

/*
O constructor é um conceito da POO que está relacionado com a existência de um método especial
dentro da classe que vai ser executado automaticamente sempre que um novo objeto é criado
*/

class Mulher
{
    private $nome;
    private $sobrenome;

    function __construct($n, $a)
    {
        $this->nome = $n;
        $this->sobrenome = $a;
    }

    function get_nome()
    {
        return $this->nome;
    }

    function get_sobrenome()
    {
        return $this->sobrenome;
    }

    function get_nome_completo()
    {
        return "{$this->nome} {$this->sobrenome}";
    }
}

//Para instanciar a classe é obrigatório passar os argumentos que o __construct pede

$m = new Mulher('Rosemeire', 'Peres'); 

echo "O nome completo é: {$m->get_nome()} {$m->get_sobrenome()}.";
echo '<br>';
echo "O nome completo é: {$m->get_nome_completo()}.";