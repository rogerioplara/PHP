<?php

//$_SESSION
//acesso para leitura e manipulação das variáveis de sessão

session_start();

//é possível definir essas variáveis na super global $_SESSION -> por padrão não tem essas informações
$_SESSION['usuario'] = 'joao';
$_SESSION['perfil'] = 'admin';
$_SESSION['autorizado'] = true;

echo '<pre>';
print_r($_SESSION);