<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>
<body>
    <?php 
    $idade = 17;
    $tem_cnh = true;
/* "?" é como um "if" para caso o valor seje verdadeiro.
   ":" é como um "if" para caso o valor seje falso.*/
    echo ($idade >= 18 and $tem_cnh) 
    ? "Você pode dirigir." 
    : "Sai do Volante, é proibido para você!";
    echo "<br>";


    $tem_ingresso = false;
    $tem_cortesia = true;

    echo ($tem_ingresso || $tem_cortesia) // or pode ser digitado por "or" ou "||". 
    //and pode ser digitado por "and" ou "&&".
    ? "Você pode entrar na festa. " 
    : "Você pode  não pode entrar na festa. ";

    echo "<br>";
    $sol = true;
    $sem_chuva = false;
    $feriado = true;

    echo ($sol && $sem_chuva || $feriado) 
    ? "Você pode passear. " 
    : "Melhor não passear.";

    ?>
    
</body>
</html>