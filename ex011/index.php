<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array e Matriz</title>
</head>
<body>
     <?php
     //Criando um array associativo
     
     $associativo = [
        "nome" => "João", 
        "idade" => 20, 
        "cidade" => "São Paulo"
     ];

     //Exibindo o array associativo 
     echo "Array Associativo: ";
     echo "<pre>";
     print_r($associativo);

     //Acessando o primeiro valor
     $primeirovalor = $associativo["nome"];
     echo $primeirovalor; //Saída: João
     echo "<br>";


     //Criando um aray multidirecional
     $multidirecioal = [
         [1, 2, 3],
         [4, 5, 6],
         [7, 8, 9]
     ];

     //exibindo o valor na posição [1] [2] (4, 5, 6) -> 6
     echo "Valor na posição [1] [2]: " . $multidirecioal[1][2];
     
     echo "<br>";
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];

    
     //Mesclando dois arrays
     $novoarray = array_merge($array1, $array2);

        //Exibindo o novo array
        echo "Array mesclado: ";
        print_r($novoarray);

        echo "<br>";
        $array = [10, 20, 30, 40];
        //Procurando valor 30 no array
        $indice = array_search(30, $array);

        //Exibindo o índice do valor 30
        echo "O valor 30 está no índice: " . $indice;

        echo "<br>";

        //Verificando se o valor 25 existe no array
        $existe = in_array(20, $array);


        //Exibindo a mensagem de acordo com a existência do valor 25 (Retornando True or False)
        if($existe){
            echo "O valor 20 existe no array.";
        }else{
            echo "O valor 20 não existe no array.";
        }


    // Matriz 3x2
    $matriz = [
        [1, 2],  //Primeira linha
        [4, 5],  //Segunda linha
        [7, 8]  //Terceira linha
    ];
    echo "<br>";
    //Acessando elementos da matriz
    echo "Elemento na posição [0] [1]: " . $matriz[0][1] . "<br>" ; //Saída: 2
    echo "Elemento na posição [2] [0]: " . $matriz[2][0] . "<br>" ; //Saída: 7
     ?>
    
</body>
</html>