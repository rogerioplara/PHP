<?php

class Fruto {

    //propriedades
    public $nome;

}

$laranja = new Fruto();

//definir o valor da propriedade
$laranja->nome = "Laranja";

//criar um outro objeto do tipo fruto
$banana = new Fruto();
$banana->nome = "Banana";

//como apresentar as propriedades de um objeto
echo $laranja->nome;
echo '<br>';
echo $banana->nome;

//cada objeto criado a partir da mesma classe contém suas propriedades indepedentes