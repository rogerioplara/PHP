<?php

/*
Esta funcionalidade não serve apenas para o construtor.
Se quisermos criar um novo método dentra da classe filha e 
ainda assim quiser executar o que está na implementação original,
pode utilizar a expressão parent::

Isso aplica-se à chamada do método com o memso nome, como a
métodos com outro nome
*/

class Veiculo
{
    public $marca;

    public function apresentar()
    {
        echo "Sou da marca: {$this->marca}.";
    }

    public function teste()
    {
        //...
    }
}

class Automovel extends Veiculo
{
    public function apresentar()
    {
        parent::apresentar();
        echo '<br>';
        echo 'Chamei a função da classe pai e adicionei esse código';
    }
}

$a = new Automovel();
$a->marca = "Ferrari";
$a->apresentar();