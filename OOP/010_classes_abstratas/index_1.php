<?php

//CLASSES ABSTRATAS

/*
Um outro conceito muito importante na POO é o conceito de
Classes abstratas.

Uma classe abstrata, com métodos abstratos, implica que a classe
tenha métodos que estão declarado, mas cuja funcionalidade vai ter 
que ser implementada nas classes derivadas
*/

use Pessoa as GlobalPessoa;

abstract class Pessoa
{
    abstract public function identificar();
    abstract public function falar();
    abstract public function saltar();
}

//como pode ver, os métodos estão declarados mas não tem implementação
//as classes derivadas vão ter que definir essa implementação

// class Client1 extends Pessoa
// {
//     //Fatal error: class Cliente1 contains 3 abstract methods
//     //and mist therefore be declared abstract or implement the remaining methods
// }

class Cliente2 extends Pessoa
{
    public function identificar()
    {
        //...
    }

    public function falar()
    {
        //...
    }

    public function saltar()
    {
        //...
    }
}

//A classe Cliente2 contém todas as implementações que a classe Pessoa
//'obriga' a implementar devido a o uso da expressão ABSTRACT
