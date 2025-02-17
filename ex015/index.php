<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de mesa</title>
</head>
<body>
    <?php 
    $a = 10;
    $b = 5;
    $c = 3;

    $a = $a = $b; //$a = 10+5 = 15
    $b = $b * $c; //$b = 5*3 = 8
    $c = $a - $c; //$c = 15-3 = 12

    echo "$a, $b, $c"; //Exibe os valores de $a, $b e $c
    
    
    
    ?>
    
</body>
</html>