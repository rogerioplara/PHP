<?php

//INCLUDE E REQUIRE

/*
Tradicionalmente uma aplicação de PHP pode conter dezenas de scripts que, combinados
entre si, permitem executar as operações desejadas.

Até agora vimos scripts isolados

Podemos separar o código entre vários scripts e, no momento da execução, "importar" o
código para o interior de nossa aplicação

Existem 4 formas de executar essa tarefa:
    include
    include_once
    require
    require_once
*/

//INCLUDE
include 'script.php';

include 'outro.php'; // o arquivo não existe, gera dois warnings

echo '<br>';
include 'script.php';

/*
Principal diferença entre o include e o require:
    include: mostra aviso se o script não existe e permite continuar a execução.
    require: mostra um erro se o script não existe e interrompe a execução.
*/