<?php

// ACCESS MODIFIERS

class Mulher
{
    public $nome;
    public $sobrenome;
    public $cor_do_cabelo;

    function metodo_1(){
        echo 'Método 1<br>';
    }
    
    protected function metodo_2(){
        echo 'Método 2<br>';
    }
    
    private function metodo_3(){
        echo 'Método 3<br>';
    }
}

$m = new Mulher();

$m->metodo_1(); //OK
$m->metodo_2(); //ERRO
$m->metodo_3(); //ERRO
