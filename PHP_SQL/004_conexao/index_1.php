<?php

//CONECTAR VIA PDO E CONTROLE DE ERROS

/*
Começaremos aprendendo como conectar a nossa aplicação a base de dados importada no vídeo anterior
*/

// 1. definir as propriedades da ligação
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

/*
Efetuando a ligação:
Para issovamos criar uma instancia da classe PDO.
Necessitamos de 3 parâmetros:

1. DSN (DATA SOURCE NAME): onde vamos especificar, no mínimo, o HOST e o nome da base de dados.

2. Nome de usuário do MySQL.

3. Password deste usuário 
*/

//instanciando a nova ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

//verificar se a ligação foi estabelecida corretamente
$estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado; //localhost via tcp/ip

/*
Como podemos ver, conseguimos fazer a ligação à base de dados

É importante perceber que existem 3 etapas numa comunicação com a base de dados:
1. Conectar com a base de dados;
2. Comunicar com a base de dados;
3. Fechar a ligação para liberar recursos;

A ligação vai ficar aberta até a destruição do objeto PDO()
Para 'desligar' a conexão, basta destruir o objeto $ligacao
*/

$ligacao = null;

//Se não fechar a ligação de forma explícita, a ligação vai ser interrompida quando o nosso script chegar ao fim da execução