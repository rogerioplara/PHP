<?php

class Usuario
{
    public readonly string $usuario;

    public function __construct($u)
    {
        $this->usuario = $u;
    }

    public function alterar()
    {
        $this->usuario = 'joaquim';
    }
}

$usuario = new Usuario('joao');
echo $usuario->usuario;

//vamos tentar alterar o valor depois de iniciada no construtor

//ao chamar o método alterar
// $usuario->alterar();
//Fatal error: cannot modify readonly property

//tentando alterar o valor diretamente também não será permitido
// $usuario->usuario = 'joaquim';

//IMPORTANTE: as propriedades readonly podem ser public, private
//ou protected, porém devem sempre ter o data type

// ex: private readonly boolean $avancar;