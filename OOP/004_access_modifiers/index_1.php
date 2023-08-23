<?php

//ACCESS MODIFIERS

/*
As propriedades e métodos podem ter níveis de acesso distintos que permitem comntrolar
a que nível podemos ter acesso a eles ou não.

PUBLIC - a propriedade ou método pode ser acessada a partir de qualquer lado.
É o access modifier padrão

PROTECTED - A propriedade ou método pode ser acessada dentro da classe e dentro da
classe de derivadas dela

PRIVATE - A propriedade ou método só podem ser acessados dentro da classe.
*/

class Homem
{
    public $nome;
    protected $sobrenome;
    private $cor_do_cabelo;
}

//instância de um novo objeto
$h = new Homem();

//Agora, se tentarmos o acesso a cada uma das propriedades:
$h->nome = "Rogerio";           //OK
// $h->sobrenome = "Peres";        //ERRO
// $h->cor_do_cabelo = "Castanho";  //ERRO