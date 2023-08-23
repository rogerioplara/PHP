<?php


$numeros_positivos = [];
$numeros_negativos = [];
$textos = [];
$textos_teste = [];
$zeros = [];

$dados = file('dados.dat'); //NÃO DEVE SER UTILIZADO DESSA FORMA, POIS A FUNÇÃO FILE() CARREGA TODOS OS DADOS PARA O ARRAY, PODENDO SER EXTREMAMENTE PREJUDICIAL PARA A MEMÓRIA EM CASO DE ARQUIVOS MUITO GRANDES.

foreach($dados as $dado){
    if(is_numeric($dado) and $dado > 0){
        $numeros_positivos[] = $dado;
    } elseif(is_numeric($dado) and $dado < 0){
        $numeros_negativos[] = $dado;
    } elseif(str_contains($dado, 'TESTE')){
        $textos_teste[] = $dado;      
    } elseif($dado != 0){
        $textos[] = $dado;
    }
}


echo '<pre>';
echo '<h3>Números Positivos</h3>';
print_r($numeros_positivos);
echo '<hr>';

echo '<h3>Números Negativos</h3>';
print_r($numeros_negativos);
echo '<hr>';

echo '<h3>Textos com TESTE</h3>';
print_r($textos_teste);
echo '<hr>';

echo '<h3>Textos Alfanuméricos</h3>';
print_r($textos);

//outra forma de resolver (professor) -> mais indicada e segura
$file = fopen("dados.dat", 'r');
while(!feof($file)){
    $linha = fgets($file);

    if(is_numeric($linha)){
        if($linha > 0){
            $numeros_positivos[] = $linha;
        } elseif($linha < 0){
            $numeros_negativos[] = $linha;
        }
        continue;
    }

    if(str_contains($linha, 'TESTE')){
        $textos_teste[] = $linha;
    } else {
        $textos[] = $linha;
    }
}
fclose("dados.dat");