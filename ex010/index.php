<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
    // Uma array e uma lista de varáveis. Um array é uma estrutura de dados que armazena vários valores em uma única variável
    // criação de array indexado
    $array = [10,20,30,40]; 

    // exibindo uma array
    echo "Array original: ";
    print_r ($array); //print_r() exibe o array de forma legível. 
    echo "<br>";
    //adicionando um valor ao final de um array
    $array[] = 50;

    //Exibindo o array atualizado
    echo "Array após adicionar 50: ";
    print_r ($array);

    echo "<br>";
    // Alterando o valor na posição 1 para 25
    $array[1] = 25;
    echo "Array após alterar o valor na posição 1 para 25: ";
    print_r($array);

    echo "<br>";

    //removendo o valor na posição 2
    unset($array[2]);

    // reorganizando os indíces do array
    $array = array_values (array: $array);

    // exibir a array
    echo "A Array após remover o valor no indíce 2: ";
    print_r (value: $array); 
    
    echo "<br>";
    $array[] =19;
    
    //Ordenando o array

    sort (array: $array); 

    //exibindo na tela o array ordenado
    echo "array Após ordenar os valores: ";
    print_r (value: $array);


    ?>
</body>
</html>