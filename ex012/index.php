<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While</title>
</head>
<body>
    <?php 
    //While significa "enquanto" em inglês. O laço while é uma estrutura de controle que repete um bloco de código enquanto uma condição for verdadeira.
    //Do while é uma estrutura de controle semelhante ao while. A diferença é que o bloco de código é executado pelo menos uma vez antes da condição ser testada.
    // é como se "Do" fosse "faça" e "While" fosse "enquanto".
    //Exemplo Do= lave a roupa, While= enquanto estiver suja.
    
    //while
    $i=1;

    while ($i <= 5) {
        echo $i . "<br>"; //imprime o valor de $i e pula uma linha
        $i++; //Atribui o valor de $i, basicamente i+1, tambem pode ser escrito como "$i+1;"
    }
    echo "<br>";
    //Mostrando valores pares de 2 a 10
    $f =2;
    while ($f <= 10) {
        echo $f . "<br>";
        $f+=2; //Atribui o valor de $f de 2 em 2

        echo "<br>";

        //Do While
        $g = 1;
        do {
            echo $g . "<br>";
            $g++; //Atribui o valor de $g, basicamente g+1, tambem pode ser escrito como "$g+1;"
        } while ($g <= 5);
    }

    ?>
</body>
</html>