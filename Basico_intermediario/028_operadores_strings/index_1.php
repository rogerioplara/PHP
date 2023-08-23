<?php

//OPERADORES DE STRINGS
// .  .=
//específicos para concatenação

$nome = "joao";
$nome = $nome . " ribeiro"; //joao ribeiro
$apresentacao = "Bom dia, " . $nome . "."; //Bom dia, joao ribeiro.

//podemos simplificar uma parte do código acima
$nome = "joao";
$nome .= " ribeiro"; //joao ribeiro

//portanto
$cliente = "joao ribeiro";
$telefone = "123456789";
$email = "joao.ribeiro@gmail.com";

$completo = $cliente . ' - ' . $telefone . ' - ' . $email;
// joao ribeiro - 123456789 - joao.ribeiro@gmail.com