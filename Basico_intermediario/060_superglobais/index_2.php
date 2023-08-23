<?php

// $_SERVER
//informações sobre o servidor e ambiente de execução


//nome do script atualmente em execução
echo $_SERVER['PHP_SELF'] . '<br>';

//endereço ip do servidor
echo $_SERVER['SERVER_ADDR'] . '<br>';

//nome do servidor
echo $_SERVER['SERVER_NAME'] . '<br>';

//informações sobre o sistema do servidor
echo $_SERVER['SERVER_SOFTWARE'] . '<br>';

//informações sobre o protocolo usado
echo $_SERVER['SERVER_PROTOCOL'] . '<br>';

//pasta raiz da aplicação
echo $_SERVER['DOCUMENT_ROOT'] . '<br>';

//Existem várias outra informações que podemos verificar com essa super global

echo '<hr>';
echo '<pre>';
print_r($_SERVER);