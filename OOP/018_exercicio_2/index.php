<?php

/*
1. criar uma chasse Humanos

2. A classe deve ter 3 propriedades privadas onde vamos guardar masculinos, femininos e desconhecidos;

3. No método definir() devemos passar dois argumentos:
    - sexo e nome
    - o método deverá implementar a lógica para construir as coleções de homens, mulheres e desconhecidos

4. Deverá implementar 3 métodos, cada um deles para devolver a coleção de nomes masculinos, femininos e desconhecidos.

5. Neste script já existe uma coleção de dados. Deverá importar a classe
Humanos, instanciar num objeto $entidades. Iterar por todos os elementos da
coleção $dados e passar a informação para dentro do objeto $entidades.

6. Finalmente, criar uma estrutura básica de HTML dentro do script e apresentar um título h1 para cada tipo de identidade e uma lista desordenada que vai apresentar cada um dos nomes de cada entidade colecionada (masculinos, femininos e desconhecidos).

Nota: 
    m ou M = masculino
    f ou F = feminimo
    outros... desconhecido
*/

require_once('Humanos.php');

use Humanos\Humano;

$dados = [
    ['m', 'João Ribeiro'],
    ['f', 'Ana Silva'],
    ['M', 'Carlos Martins'],
    ['m', 'Joaquim Santos'],
    ['f', 'Marta Rodrigues'],
    ['M', 'Rui Fernandes'],
    ['F', 'Márcia Antunes'],
    ['g', 'Pantufa'],
    ['f', 'Carla Maria'],
    ['M', 'Fernando Joaquim'],
    ['m', 'Ricardo Moita'],
    ['c', 'Lassie'],
    ['F', 'Daniela Cardoso'],
    ['F', 'Susana Dinis'],
];

$entities = new Humano();

foreach ($dados as list($s, $nome))
{
    $entities->definir($s, $nome);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Masculinos</h1>
    <ul>
        <?php foreach ($entities->get_masculinos() as $elemento) : ?>
            <li><?= $elemento ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Femininos</h1>
    <ul>
        <?php foreach ($entities->get_femininos() as $elemento) : ?>
            <li><?= $elemento ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Desconhecidos</h1>
    <ul>
        <?php foreach ($entities->get_desconhecidos() as $elemento) : ?>
            <li><?= $elemento ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>