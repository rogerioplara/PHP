<?php

/*
As classes podem ter propriedades estáticas e não estáticas, bem como
acontece nos métodos.
As propriedades estáticas podem ser acessadas a partir de qualquer
método da classe usando a expressão SELF
*/

class Humano
{
    public static $nome;

    public function definir_nome($n)
    {
        self::$nome = $n;
    }

    public function apresentar()
    {
        return "O meu nome é " . self::$nome;
    }
}

$humano = new Humano();
$humano->definir_nome("Rogerio Peres");
echo $humano->apresentar();
