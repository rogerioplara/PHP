<?php

//Para remover uma pasta
// rmdir(__DIR__ . '/pasta_teste');

//mais uma vez, aparecerá um aviso se a pasta não existir
if(file_exists(__DIR__ . '/pasta_teste')){
    rmdir(__DIR__ . '/pasta_teste');
}

//IMPORTANTE: a pasta só pode ser removida se estiver vazia.
rmdir(__DIR__ . '/data');