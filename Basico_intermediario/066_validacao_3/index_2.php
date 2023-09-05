<?php

/*
usamos também a mesma função para limpar os valores
*/

echo '<pre>';

//remove todos os caracteres que não podem existir nos emails
//não valida se o email é válido ou não
$email = "joao ribeiro@gmail.com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

$email = "joao ribeiro teste com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

//adiciona caracteres de escape
$frase = "John's party is going to be 'awesome'!";
var_dump(filter_var($frase, FILTER_SANITIZE_ADD_SLASHES));

//normaliza um valor para ser um float
//retira todos os caracteres, exceto os números, sinal - e + e opcionalmente, ponto e vírgula
$valor = "342 s 55.57";
var_dump(filter_var($valor, FILTER_SANITIZE_NUMBER_FLOAT)); //3425557

//normaliza um valor para ser um inteiro
//remove todos os caracteres, exceto os dígitos e o + e -
$valor = "123 ab4.56s7";
var_dump(filter_var($valor, FILTER_SANITIZE_NUMBER_INT)); //1234567

//normaliza uma url
$url = "http://        www. meusi te.c o m";
var_dump(filter_var($url, FILTER_SANITIZE_URL));

echo '</pre>';

/*
https://www.php.net/manual/en/filter.filters.sanitize.php
*/