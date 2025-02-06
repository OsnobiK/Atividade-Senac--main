<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Switch</title>
</head>
<body>
    <H2>Condicinal Switch</H2>

<?php

$fruta = "Maça";
switch ($fruta) { 
    case "Banana" : 
        echo "A fruta é uma Banana! ";
    break;
    case "Maçã" : 
        echo "A fruta é uma Maçã! ";
    break;
    case "Laranja" : 
        echo "A fruta é uma Laranja! ";
    break;
    default: 
        echo "Fruta desconhecida! ";
    break;
}

echo "<br>";

$cor = "Azul"; 
switch ($cor) {
    case "vermelho":
    case "laranja":
        echo "Cor é quente. ";
    break;
    case "Azul":
    case "verde":
        echo "Cor é fria. "; 
    break;
    default:
        echo "Cor desconhecida! ";
    break;      
}

echo "<br>";

$numero = null;
switch (true) {
    case (is_numeric($numero) && $numero < 5):
        echo "O Numero é menor que 5.";
    break;
    case (is_numeric($numero) && $numero == 5):
        echo "O número é Igual a 5."; 
    break;
    case (is_numeric($numero) && $numero > 5):
        echo "O Numero é maior que 5.";
    break;
    default:
        echo "Número não identificado!"; 
    break;
}
    ?>
</body>
</html>