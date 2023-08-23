<?php

//podemos definir o nome de uma variável a partir do valor de outra.
$original = "nome";
$$original = "valor final"; // o mesmo que $nome = "valor final";

echo $nome;

// IMPORTANTE: usaremos muitas variáveis ao longo do curso