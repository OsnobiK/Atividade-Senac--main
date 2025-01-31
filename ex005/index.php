<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h2>Operadores de Atribuição</h2>
    <?php 
    //string
    $rua = "Rua Amador Bueno";
    //Atribuição de String
    $rua .= " na cidade de São Paulo";

    //float
    $preço = 2.45;
    //Atribuição de Soma
    $preço += 2.30;
    //Atribuição de subtração
    $preço -= 1.30;

    //formatar o numero para usar como separador decimal
    $preco_formatado = number_format($preço, 2, ',', '.'); 
    //exibe o resultado - por interpolação
    echo "$rua, <br> Preço R$ $preco_formatado";
    
    
    ?>
    
</body>
</html>