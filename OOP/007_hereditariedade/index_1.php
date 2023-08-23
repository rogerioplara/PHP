<?php

//Hereditariedade

/*
Um dos aspectos mais importantes da OOP é a possibilidade de estruturarmos nosso código no 
sentido a permitir que classes possam herdar propriedades e métodos de outras classes

Desta forma, podemos ter código mais limpo e bem estruturado, sem repetições desnecessárias
de código
*/

class Veiculo
{
    public $tipo;

    public function ligar()
    {
        return 'Veículo ligado';
    }

    public function desligar()
    {
        return 'Veículo desligado';
    }
}

//a classe veículo vai agora ser usada para criar duas classes
class Automovel extends Veiculo
{
    //além das propriedades e métodos da classe veículo,
    //vai ainda ter as propriedades específicas desta classe
    public $portas;
    public $marca;
    public $ano;
}

class Aviao extends Veiculo
{
    public $altitude_maxima;
    public $autonomia;
    public $fabricante;
    public $ano_de_fabricação;
}

//Então...

$automovel = new Automovel();
$automovel->tipo = "Veículo terrestre";
$automovel->marca = "Ferrari";
$automovel->portas = 2;
$automovel->ano = 2020;

$aviao = new Aviao();
$aviao->tipo = "Veículo aéreo";
$aviao->fabricante = "Boeing";
$aviao->autonomia = 6000;
$aviao->ano_de_fabricação = 2022;
$aviao->altitude_maxima = 33000;

//esses métodos vêm da classe 'pai'
echo $automovel->ligar();
echo '<br>';
echo $aviao->ligar();
