<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
    function saudação(){
        echo "Olá, seja bem vindo ao PHP!<br>";
    }
    saudação(); //Chama a função saudação
    
    function soma ($a , $b){
        return $a + $b;
    }

    $resultado = soma(5, 3); //Chama a função soma e atribui o resultado a variável $resultado
    echo "Resultado da soma: " . $resultado . "<br>"; //Exibe o resultado da soma.

    $resultado1 = soma(8, -2);
    echo "resultado da soma: " . $resultado1 . "<br>";//Saida: resultado da soma: 6
    
    /*Posso chamar a função sempre que precisar, ou seja basta usar o nome "soma" que a função sera ativa e para edita-la, basta alterar o valor de $a e $b.*/


    echo "<br>";
    function saudacaopersonalizada($nome = "visitante"){
        echo "Olá, $nome! seja bem vindo ao PHP!<br>";
    }
    saudacaopersonalizada(); //chama a função saudacaopersonalizada sem passar valor para o parâmetro $nome
    
    echo "<br>";

    saudacaopersonalizada("Caleb"); //chama a função saudacaopersonalizada e passa o valor "Caleb" para o parâmetro $nome
  
  
  ?>



    
</body>
</html>