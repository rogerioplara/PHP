<?php

//CONSTANTES MÁGICAS

/*
Existem nove constantes mágicas no PHP
são designadas por constantes mágicas, porque o seu valor é definido
dependendo do local onde estão sendo utilizadas.
Por exemplo, o valor __LINE__ depende da linha de código dentro do script
onde a constante mágica está sendo utilizada.
São constantes case-insensitive e permitem solucionar vários desafios.
*/

//__LINE__
//indica a linha atual do código onde a constante se encontra
echo 'Número da linha em index_1.php: ' . __LINE__ . '<br>';

require_once 'script.php';

//__FILE__
/*
O caminho completo do arquivo, independentemente de envolvere symbolic links.
Se for usada dentro de um include ou require, será indicado o nome do script que está sendo incluído
*/

echo '(index_1.php): ' . __FILE__ . '<br>';

include 'script_1.php';
require 'script_1.php';