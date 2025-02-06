<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicioanl IF, Else e Elseif</title>
</head>
<body>
    <h2>
    <?php 
    // Condicional IF
    if (1< 2){
        echo "O numero 1 é menor. <br>";
    }
    

    $idade = 18 ;
         if ($idade >= 18){
        echo "Você é maior de idade.  <br> ";
         }
         

    // Condicional Else
    
    $a = 10; 
    $b = 14; 

         if ($a == $b) {
        echo "As variáveis são iguais. "; //se for
         } else {
        echo "As variáveis são diferentes. <br> "; //se não
         }

    // Condicional Elseif
    $idadepessoa = 25; 

    if ($idadepessoa < 13 ) {
        echo "Você é uma criança. ";
    } elseif ($idadepessoa >= 13 && $idadepessoa <= 19) {
        echo "Você e um adolescente. ";
    } elseif ($idadepessoa >= 20 && $idadepessoa <= 59) {
        echo "Você é um adulto. ";
    } else {
        echo "Você é um idoso. ";
    }   
    ?>
    </h2>
</body>
</html>