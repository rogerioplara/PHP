<?php

/*
O arquivo dados.csv contém um conjunto de 40 linhas com informações sobre veículos.
Construa uma classe abstrata Veiculos que contém 3 propriedades protegidas:
    tipo, marca e ano
Essa classe deve ter um construtor que recebe cada uma das linhas do arquivo CSV.
Deve ter também um método get_tipo() para devolver o valor de $tipo que é protegido.

Crie 3 classes derivadas de Veiculos: automovel, aviao e barco

Cada uma das classes deve ter um método apresentar().
Este método devolve uma string com o seguinte formato:
    "Este objeto guarda os dados de um automóvel da marca [marca], no ano [ano]"
    "Este objeto guarda os dados de um avião da marca [marca], no ano [ano]"
    "Este objeto guarda os dados de um barco da marca [marca], no ano [ano]"

Crie um array vazio Veículos. Ele vai guardar uma coleção de diferentes objetos (automovel, aviao e barco).
Cada uma das linhas do arquivo CSV deverá ser carregada, analisada e consoante ao tipo, adicionada ao array Veículos como um novo objeto do tipo correto.

No final apresente as frases criadas pelos métodos apresentar, de cada um dos objetos da coleção veículo    
*/

require_once('classes.php');

$veiculos = [];

$file = fopen('dados.csv', 'r');

while (!feof($file))
{
    $linha = fgetcsv($file);
    switch ($linha[0])
    {
        case 'automovel':

            break;

        default:
            # code...
            break;
    }
}

fclose($file);
