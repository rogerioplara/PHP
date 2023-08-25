<?php

//FUNÇÕES ÚTEIS PARA VERIFICAÇÃO DE CLASSES

/*
Pode surgir a necessidade de verificar se uma determinada 
classe existe, ou se uma determinada classe tem um determinado
método ou propriedade

Vamos verificar 3 funções do PHP que permitem essas verificações
*/

class Human
{
    public $name;

    public function falar($mensagem)
    {
        //...
    }
}

class Person
{
    //...
}

//verificar se uma classe existe
echo class_exists('Person') ? 'Sim' : 'Não';
echo '<br>';

//verifica se um método existe dentro da classe
echo method_exists('Human', 'falar') ? 'Sim' : 'Não';
echo '<br>';

//verifica se uma propriedade existe dentro de uma classe
echo property_exists('Human', 'sobrenome') ? 'Sim' : 'Não';
echo '<br>';