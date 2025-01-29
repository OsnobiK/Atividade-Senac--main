<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variaveis</title>
</head>
<body>
    <h2>
    <?php
    //Variavel tipo string
    $sobrenome = "Calebi Costa";
    echo "<br> <br>";

    //Variavel tipo int
    $idade = "19 Anos";
    echo "<br> <br>";

    //Variavel tipo float
    $peso = "800.9 KG";
    echo "<br> <br>";

    //Variavel tipo boolean (Verdadeiro ou Falso)
    $casado = false;


    echo "$sobrenome $idade $peso   ";
    echo "<br> <br>";
    
    //Método 1: Usamdp var_dump para exibir o valor booleano
    var_dump($casado); // Exibe 'bool(false)'

    //Método 2: Usando uma conversão booleana para string
    echo ($casado ? "Casado" : "Não é Casado"); //Exibe "não é casada"

    ?>
    </h2>

    
</body>
</html>