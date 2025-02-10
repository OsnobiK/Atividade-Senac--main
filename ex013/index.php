<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laço for e foreach</title>
</head>
<body>
    <?php 
    echo "<br>For<br>";
    //For
    for($i =1; $i <= 5; $i++){
echo $i. "<br>"; //imprime o valor de $i e pula uma linha

    }
    
echo "<br>";


    for ($a = 1; $a <=5; $a++){
        echo "O quadrado de $a é " . ($a * $a) . "<br>";
    }
    //For each

    echo "<br>";
    echo "Foreach<br>";
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];

    foreach ($frutas as $fruta){
        echo $fruta . "<br>"; //Imprime o valor de cada fruta e pula uma linha
    }
    echo "<br>";
    $idades = [
        "João" => 25, 
        "Maria" => 30, 
        "Pedro" => 22
    ];
    foreach ($idades as $nome => $idade){
        echo "O $nome tem $idade anos <br>";//Exibe nome e idade de cada pessoa
    }

    ?>
    
</body>
</html>