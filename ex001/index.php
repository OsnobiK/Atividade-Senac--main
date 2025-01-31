<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I ALONE AM THE HONORED ONE</title>
</head>
<body>
   <h2>
<?php 

//DECLARANDO UMA VARIAVEL
   $nome = "EoKaKa";
   $sobrenome = "Né Vida";
echo "Bem-vindo meu amor, $nome $sobrenome";
   // ECHO USADO PARA QUEBRA DE LINHAS
echo "<br> <br>";

   // ADIIONANDO UMA CONSTANTE 

const cor = "azul";
//NÃO É POSSIVEL EDITAR UMA CONSTANTE, PORÉM DA PARA ADICIONAR UMA NOVA CONSTANTE NO CODIGO
const cor2 = "preto";
echo "Minha cor favorita é " .cor . " e " . cor2;

?>
   </h2>
</body>
</html>