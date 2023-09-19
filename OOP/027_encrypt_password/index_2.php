<?php

/*
O PHP contém duas funções complementares para tornar o processo mais complexo.
password_hash() permite criar a senha
password_verify() permite verificar se uma senha e a encriptação de outra coincidem
*/

$password = "aminhasenha";
echo password_hash($password, PASSWORD_DEFAULT);
echo '<br>';
echo password_hash($password, PASSWORD_BCRYPT);

/*
O primeiro parâmetro é a senha real, o segundo define o mecanismo de encriptação.
nestse caso, define o algoritmo que utilizará para encriptar a senha verdadeira.

No caso, PASSWORD_DEFAULT é o mesmo que definir PASSWORD_BCRYPT que é o padrão.
Existem outros algoritmos porém utilizaremos esse

Repare que o resultado da encriptação nunca é o memso

Essa função não necessita que seja indicado qual foi o algoritmo usado para a encriptação. Quando recebemos
o valor ecriptado, a função verifica qual foi o algoritmo
*/

echo '<br>';

$password_real = "aminhapassword";
$password_encriptada = password_hash("TESTE", PASSWORD_DEFAULT);

if (password_verify($password_real, $password_encriptada)) {
    echo "OK";
} else {
    echo "NOK";
}

// Se mudar o texto do argumento da senha real, vai ser falso