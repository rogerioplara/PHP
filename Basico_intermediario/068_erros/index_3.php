<?php

/*
A função error_log() permite escrever o que quiserem no registro de logs de filesystem do PHP.

O PHP tem normalmente ativo o sistema de registro de logs.
Se quiser verificar esse arquivo no sistema, podemos executar o
phpinfo() e procurar a propriedado error_log
*/

phpinfo();

/*
O PHP vai escrevendo eventos de erro nesse arquivo.
Se desejar escrever seu próprio arquivo:
*/
error_log('Aconteceu um erro.');

/*
Tradicionalmente, no desenvolvimento de aplicações,
vai querer utilizar um pacote externo que segue 
as normas para registro de logs. Um dos mais conhecidos é o
monolog. Iremos no módulo posterior ver como adicionar esse
pacote ao nosso sistema com o composer e como podemos usá-lo nos projetos

Existem outras funções que permite configurar erros.

O importante é saber como controlar esses erros
e evitar que a aplicação crashe por causa de um erro
*/