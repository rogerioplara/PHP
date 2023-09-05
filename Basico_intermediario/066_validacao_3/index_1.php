<?php

/*
Controlar e validar a informação que é introduzida na aplicação por parte dos usuários
é fundamental para garantir que só seja aceita a informação esperada, fechando espaços
para eventuais erros e explits.

O usuário inseriu um email valido?
O valor é do tipo correto?

Entre as muitas formas que existem para fazer essa validação, o PHP contém uma
que é bastante interessante

a função filter_var() contém filtros de validação e de sanitização
*/

echo '<pre>';

$a = "teste";
var_dump(filter_var($a, FILTER_VALIDATE_EMAIL)); //false
$a = "teste@teste.com";
var_dump(filter_var($a, FILTER_VALIDATE_EMAIL));

/*
A função tomo como primeiro parâmetro o valor a analisar e o segundo é uma constante que
indica que tipo de vlaidação vai ser analisada

S eo valor analisado for do tipo correto, a função devolve esse valor.
Se for incorreto, devolve false
*/

//verifica se é booleano
$a = true;
var_dump(filter_var($a, FILTER_VALIDATE_BOOLEAN));
//ou
var_dump(filter_var($a, FILTER_VALIDATE_BOOL));

//verifica se é float
$a = 100;
var_dump(filter_var($a, FILTER_VALIDATE_FLOAT));

//verifica se é inteiro
$a = "abc";
var_dump(filter_var($a, FILTER_VALIDATE_INT));
$a = 1000;
var_dump(filter_var($a, FILTER_VALIDATE_INT));

//verifica se é um ip válido
$ipv4 = '127.0.0.1';
var_dump(filter_var($ipv4, FILTER_VALIDATE_IP));

//podemos especificar que tipo de IP
//ipv4
var_dump(filter_var($ipv4, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV4]));
var_dump(filter_var($ipv4, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV6]));

//ipv6
$ipv6 = "2001:db8:3333:4444:5555:6666:7777:8888";
var_dump(filter_var($ipv6, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV4]));
var_dump(filter_var($ipv6, FILTER_VALIDATE_IP, ['flags' => FILTER_FLAG_IPV6]));

//validar URL
$url = "www.meusite.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL)); //false
$url = "http://www.meusite.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL));

echo '</pre>';

/*
https://www.php.net/manual/en/filter.filters.validate.php
*/