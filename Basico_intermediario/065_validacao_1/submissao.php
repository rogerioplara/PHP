<?php

//verifica se houve um request do tipo POST
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso Inválido');
}

/*
REGRAS DE VALIDAÇÃO

- Todos os campos são de preenchimento obrigatório, exceto o textarea.
- O primeiro campo de texte tem que ter entre 5 e 30 caracteres.
- O campo da senha, tem que ter exatamente 12 caracteres.
- Das 3 checkboxes, pelo menos uma deve estar selecionada.
- nos radiobuttons deve existir uma opção selecionada
- no caso do textarea, não é obrigatório, mas se tiver texto, deve ser de no mínimo
30 caracteres.
*/

$erros = [];

//texto
if(empty($_POST['text_texto'])){
    $erros[] = 'O campo Texto é de preenchimento obrigatório';
} else {
    if (strlen($_POST['text_texto']) < 5 || strlen($_POST['text_texto']) > 30){
        $erros[] = 'O campo Texto deve ter entre 5 e 30 caracteres.';
    }
}

//password
if(empty($_POST['text_password'])){
    $erros[] = 'O campo Senha é de preenchimento obrigatório';
} else {
    if(strlen($_POST['text_password']) != 12){
        $erros[] = 'O campo Senha deve ter 12 caracteres';
    }
}

//select
if(empty($_POST['select_pais'])){
    $erros[] = 'Deve ter um país selecionado';
}

//checkboxes
if(empty($_POST['check_1']) && empty($_POST['check_2']) && empty($_POST['check_3'])){
    $erros[] = 'Pelo menos uma checkbox deve estar selecionada';
}

//radiobuttons
if(empty($_POST['radio'])){
    $erros[] = 'Um radiobutton deve estar selecionado';
}

//área de texto
if(!empty($_POST['text_area']) && strlen($_POST['text_area']) < 30) {
    $erros[] = 'A textarea deve ter ao menos 30 caracteres';
    
} 


if(!empty($erros)){
    echo '<h4>ERRO!</h4>';
    echo '<ul>';
    foreach($erros as $erro){
        echo "<li>$erro</li>";
    }
    echo '</ul>';
} else {
    echo '<pre>';
    print_r($_POST);
}