<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
</head>
<body>
    <?php 

    $a = 10; //Variavel com um Inteiro
    $b = "10"; // Variavel com um string

    echo "<br> <h1>Comparação de igualdade </h1>";


    echo ($a == $b) //"==" : sao iguais.
    ? "São iguais." 
    : "Não são iguais.";

    echo "<br>";

    echo ($a === $b)  // "===" : são estritamente iguais
    ? "São estritamente iguais." 
    : "Não São estritamente iguais.";

    echo "<br> <h1>Comparação de diferença </h1>";

    echo ($a != $b) 
    ? "São diferentes." 
    : "São iguais.";
    echo "<br>";
    echo ($a !== $b) 
    ? "São estritamente diferentes." 
    : "São estritamente iguais";

    $teste = false;
    echo "<br> <h2> Negação </h2>";
    echo (!$teste) /*Ao usar "!" invertemos a resposta final do booleano, no caso "false" vira "true"*/
    ? "É verdadeiro." 
    : "É falso.";

    $c = 5;
    $d = 3;
    echo "<br> <h2> Maior que e Menor que </h2>";
    echo ($c > $d)  
       ? "C é maior que D." 
        : "C não é maior que D";
    
        $e = 5;
        $f = 5;
        $g = 3;
    
    echo "<br>";
    echo ($e <= $f) 
    ? "E é menor ou igual a G."
    : "E não é menor ou igual a G.";
    echo "<br>";
    echo ($e <= $g) 
    ? "E é menor ou igual a G."
    : "E não é menor ou igual a G.";










    ?>
</body>
</html>