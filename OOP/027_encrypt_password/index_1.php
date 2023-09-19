<?php

/*
É necessário averiguar como proteger as informações de um usuário da nossa aplicação;

O nome de usuário, tratando-se de um dado pessoal (email), deve ser sempre encriptado de forma reversiva
Isto é, armazenamos o dado na base de dados de forma encriptada, usando um método que permite fazer o 
processo inverso e obter o texto verdadeiro.

No caso da senha, devemos garantir que isso não ocorra.
Uma vez definida, não é possível reverter o processo na base de dados

Para isso, encriptamos acom a mesma metodologia a senha inserida no momento do login e comparamos com o 
valor que está na base de dados (mais ou menos)

Metodologias mais antigas utilizavam o MD5 e SHA1
*/

echo md5("aminhasenha");
echo '<br>';
echo sha1("aminhasenha");

/*
Nesse caso não pode ser verificada a senha, porém retorna sempre a mesma hash
*/