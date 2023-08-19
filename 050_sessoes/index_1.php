<?php

//SESSÕES

/*
As sessões são um dos mecanismos que o PHP oferece para manter informação entre diferentes requests.
Sempre que navegamos numa página web criada em PHP, e sempre que um novo pedido é feito ao servidor (por exemplo para ver uma nova página), toda informação sobre variáveis é perdida.

Existem várias formas de persistência de informação.

Se quisermos guardar informação entre request, podemos usar cookies, guardar e ler dados de uma base de dados, passando variáveis através de POST ou GET

Com as sessões, podemos guardar dados temporariamente no servidor e no request seguinde esses dados vão continuar disponíveis
*/