<?php

/*
E como acontece com os métodos, as propriedades estáticas também podem
ser acessadas a partir de classes derivadas usando a expressão PARENT
*/

class Humano
{
    public static $valor = "Classe principal";
}

class Homem extends Humano
{
    public function executar()
    {
        return parent::$valor;
    }
}

$homem = new Homem();
echo $homem->executar();
