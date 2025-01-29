<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <h1>Operadores Aritmeticos</h1>
    <?php 
    $soma = 20 + 20;
    $subtração = 30 - 20;
    $divisão = 5 / 2;
    $resto = 5 % 2;
    $multiplicação = 5 * 3;
    $potenciacao = 2 ** 3;

    /* ordem de grandeza
    primeiro = () parenteses
    fora do parenteses se calcula na ordem abaixo
    segundo = potenciação
    terceiro = multiplicação
    quarto = divisão
    quinto = soma
    sexto = subtração
    */

    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtração <br>";
    echo "Resultado da subtração é $divisão <br>";
    echo "Resultado da subtração é $resto <br>";
    echo "Resultado da subtração é $multiplicação <br>";
    echo "Resultado da subtração é $potenciacao <br>";

    //primeira expressao a ser feita

    $valo1 = (3 + 2) * 4;
    //Exibindo Resultados - Concatenação
    echo "Resultado da primeira expressão é " . $valo1 . "<br>";
    //("\n") serve para pular uma linha após a string.
   
    //Segunda Expressão (2 * (2 + (2 - 1))) + 8
    $valor2 = (2 * (2 + (2 - 1))) + 8;

    //Exibindo os resultados - concatenação
    echo "Resultado da segunda expressão é " . $valor2 . "<br>";

    $a = 3;
    $b = 2;
    $c = 4;
    $calculo = ($a + $b) * $c;

    //Exibindo os resultados - concatenação
    echo "Resultado do calculo das variaveis é " . $calculo . "<br>";

    ?>  
   
    
</body>
</html>