<?php

// COMO CHAMAR O CONSTRUTOR DE UMA CLASSE PAI

//vejamos o cenário que temos uma classe derivada de outra

class Humano
{
    public $nome;
    public $perfil;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Funcionario extends Humano
{
    public function __construct()
    {
        $this->perfil = "administrador";
    }
}

$funcionario = new Funcionario();
echo $funcionario->perfil;

/*
Como foi implementado um __construct na classe funcionário, a 
herança esquece a assinatura da classe pai e assume a classe filho
*/