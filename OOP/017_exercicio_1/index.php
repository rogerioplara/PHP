<?php

/*
1. Criar uma classe (class_numero)
2. A classe deverá ter uma propriedade privada número
3. o construtor da classe server para definir o número
4. O método get_numero() serve para devolver o número
5. O método par_ou_impar() deverá devolver 'par' ou 'impar' após analisar o número
6. O método tabuada() deverá devolver um array com a tabuada do número até 10.
7. O método raiz_quadrada() deverá devolver a raiz quadrada do número
8 Neste script devemos importar a classe, criar 4 objetos a partir dela com os valores 5, 7, 16 e 123
Para cada uma dessas instâncias, devemos apresentar:
    a) O número
    b) se é par ou ímpar
    c) a raiz quadrada
    d) a tabuada
*/

require_once('Numero.php');

use Calculadora\Numero;

$n1 = new Numero(5);
echo $n1->get_numero() . '<br>';
echo $n1->par_ou_impar();
echo '<pre>';
print_r($n1->tabuada());
echo '</pre>';
echo $n1->raiz_quadrada();
echo '<hr>';

$n2 = new Numero(7);
echo $n2->get_numero() . '<br>';
echo $n2->par_ou_impar();
echo '<pre>';
print_r($n2->tabuada());
echo '</pre>';
echo $n2->raiz_quadrada();
echo '<hr>';

$n3 = new Numero(16);
echo $n3->get_numero() . '<br>';
echo $n3->par_ou_impar();
echo '<pre>';
print_r($n3->tabuada());
echo '</pre>';
echo $n3->raiz_quadrada();
echo '<hr>';

$n4 = new Numero(123);
echo $n4->get_numero() . '<br>';
echo $n4->par_ou_impar();
echo '<pre>';
print_r($n4->tabuada());
echo '</pre>';
echo $n4->raiz_quadrada();
echo '<hr>';
