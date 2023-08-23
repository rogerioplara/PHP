<?php

/*
Pegando do exemplo anterior, a interface Animal declara a função vocalizar. Cada animal tem uma forma diferente de vocalizar. Então podemos fazer o seguinte:
*/

interface Animal2
{
    public function vocalizar();
}

class Cao implements Animal2
{
    public function vocalizar()
    {
        echo "Latir...";
    }
}

class Gato implements Animal2
{
    public function vocalizar()
    {
        echo "Miar...";
    }
}

class Lobo implements Animal2
{
    public function vocalizar()
    {
        echo "Uivar...";
    }
}

$cao = new Cao();
$cao->vocalizar();
echo '<br>';

$gato = new Gato();
$gato->vocalizar();
echo '<br>';

$lobo = new Lobo();
$lobo->vocalizar();
echo '<br>';

/*
Concluindo, enquanto as classes são modelos para a criação de objetos, 
as interfaces podem ser usadas como modelo para criação de classes.
Funcionam como um contrato no qual o programador, para implementar uma
determinada classe, compromete-se a desenvolver essa classe a partir
de uma interface, mantendo a estrsutura de métodos que essa interface
declara, independentemente da implementação de código que esses
métodos depois vão ter dentro da classe.
IMPORTANTE: Estes conceitos são centrais no âmbito da POO, mas isso não
quer dizer que tem que aplicar em todos os projetos.
Na maior parte dos casos, estes conceitos são aplicados no desenvolvimento de frameworks que depois serão aproveitados para 
construir as aplicações.
*/