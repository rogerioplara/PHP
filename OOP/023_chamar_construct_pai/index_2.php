<?php

//como chamar o construct do pai

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
    public function __construct($n)
    {
        // puxa da classe pai o construtor
        parent::__construct($n);

        //ainda é possível gerar novos construtores específicos
        $this->perfil = "administrador";
    }
}

$funcionario = new Funcionario('joao');
echo $funcionario->nome;
echo '<br>';
echo $funcionario->perfil;