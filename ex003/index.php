<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios e Variavel Dentro da Variavel</title>
</head>
<body>
    <h2>Variavel Dentro de uma Variavel</h2>
    <?php 
    //Para comentario de uma linha eu uso o barra e barra
    /*
    eu uso
    para comentar
    varias linhas 
    ao mesmo tempo
    */

    //concatenação abaixo
    $nome = "Caleb";
    $sobrenome = "Costa";
    $idade = "19 anos";
    $corfavorita = "Azul e Preto";


    //A Variavel abaixo recebe uma interpolação
    $frase = "Seu nome é $nome, seu sobrenome é $sobrenome e suas cores favoritas são $corfavorita";

    echo "$frase";


    ?>
    
</body>
</html>