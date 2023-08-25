<?php

// PROPRIEDADES READONLY

/*
Dentro de uma classe, podemos ter as nossas propriedades 
protegidas. A partir do PHP 8.1, passou a ser possível a existência de propriedades só de leitura (readonly)

A principal característica das propriedades readonly é o fato
de só poderem ser iniciadas dentro da classe, depois de
iniciadas, não podem ter seu valor alterado
*/

//Exemplo: essa construção simples não é possível
//definir a propriedade $usuario, apesar de publico, gera erro

class Usuario1
{
    public readonly string $usuario;
}

$usuario = new Usuario1();
//$usuario->usuario = 'joao';

//forma correta:

class Usuario2
{
    public readonly string $usuario;
    public function __construct($u)
    {
        $this->usuario = $u;
    }
}

$usuario = new Usuario2('joao');
echo $usuario->usuario;