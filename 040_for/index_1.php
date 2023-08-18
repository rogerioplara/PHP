<?php

//FOR

//for(expreção de iniciação; expreção de condição; expressão de incremento){
//  código
//}

for($indice = 1; $indice <= 10; $indice++){
    echo "Índice: $indice<br>";
}

echo '<hr>';

//em cenários menos comuns, podemos remover algumas expressões

/*
for(;;){

}

Trata-se de um ciclo infinito. Para que ele termine, será necessário criar um cenário no interior do cicle para que ele seja interrompido

*/

for ($i=0; $i < 10; print $i, $i++) { 
}

echo '<hr>';

//podemos usar para fazer um aiteração pelos dados de um array

$nomes = ['joao', 'ana', 'carlos'];
for ($i=0; $i < count($nomes); $i++) { 
    echo $nomes[$i] . '<br>';
}

echo '<hr>';

//ou iterar pelas letras de uma string
$frase = "Teste com uma string.";
for ($i=0; $i < strlen($frase); $i++) { 
    echo $frase[$i] . '<br>';
}

echo '<hr>';

//IMPORTANTE: sobre questões de performance
//se usarmos uma função na expressão de avaliação da condição, podemos compremeter a performance, no caso de ser um ciclo longo.
//então:

$valores = [10,20,30,40,50,60,70,80,90,100]; //vamos imaginar um array gigante

//em vez de:
for ($i=0; $i < count($valores); $i++) { 
    # code...
}

//podemos escrever:
for ($i=0, $total_valores = count($valores); $i < $total_valores; $i++) { 
    # code...
}

//$total_valores só vai ser executado no primeiro passo do ciclo
//e a expressão de avaliação vai analisar o valor da variável, não recontar todo o array como no count($valores);