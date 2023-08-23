<?php

/*
As classes podem ter PROPRIEDADES e MÉTODOS

PROPRIEDADES são variáveis da classe
MÉTODOS são funções da classe

A palavra-chave $this refere-se ao objeto atual e só está disponível dentro dos métodos
*/

use Fruto as GlobalFruto;

class Fruto
{
    public $nome;
    public $cor;
    public $peso;

    public function apresentar_fruto()
    {
        return "O meu nome é {$this->nome}, a minha cor é {$this->cor} e tenho {$this->peso} gramas.";
    }
}

$laranja = new Fruto();
$laranja->nome = "Laranja";
$laranja->cor = 'Laranja';
$laranja->peso = '125';

$banana = new Fruto();
$banana->nome = "Banana";
$banana->cor = "Amarela";
$banana->peso = '178';

echo $laranja->apresentar_fruto();
echo '<br>';
echo $banana->apresentar_fruto();