<?php

// tradicionalmente, a pasta HELPERS possui funções para sere utilizadas na aplicação
// essas funções geralmente são funções não específicas, por exemplo, para normalização
// de valores, formatação de textos, etc...

// Debugging function
function printData($data, $die = true)
{
    echo '<pre>';
    if (is_object($data) || is_array($data)) {
        print_r($data);
    } else {
        echo $data;
    }

    if ($die) {
        die('<br>FIM</br>');
    }
}
