<?php

// SOBREPOSIÇÃO DE MÉTODOS HERDADOS

/*
O conceito de 'sobreposição' é uma tradução simples de um outro conceito
mais conhecido como 'override'.
nã prática significa que podemos ter uma classe 'mãe' onde um
determinado método é definido e podemos alterar o seu código dentro
de uma chasse 'filha'
*/

use Pessoa as GlobalPessoa;

class Pessoa
{
    public $nome;

    public function identificacao()
    {
        echo "O nome é {$this->nome} e este método é da classe mãe.";
    }
}

class Cliente extends Pessoa
{
    public function identificacao()
    {
        echo "O nome é {$this->nome} e este método tem uma nova implementação na classe filha.";
    }
}

//instanciando um objeto de cada classe

$pessoa = new Pessoa();
$pessoa->nome = "joao";

$cliente = new Cliente();
$cliente->nome = "carlos";

$pessoa->identificacao();
echo '<br>';
$cliente->identificacao();
