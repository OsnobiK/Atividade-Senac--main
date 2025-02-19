<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <?php
    //Super classe 
    class Animal{
        public function fazerSom(){
            return "O animal faz um som.";
        }
    }
    
    //Subclasse
    class Cachorro extends Animal{
        public function fazerSom(){
            return "Au au au au";
        }
    }

    //Outra subclasse
    class Gato extends Animal{
        public function fazerSom(){
            return "Miaaaaaaaaaau";
        }
    }

    //Função que utiliza polimorfismo
    function emitirSomAnimal(Animal $animal){
        echo $animal->fazerSom() . "<br>";
    }

    //Criar objetos - instâncias
    $cachorro1 = new Cachorro(null);
    $gato1 = new Gato(null);
    
    //Chamando a função com diferente objetos, mas com a mesma assinatura
    emitirSomAnimal($cachorro1);
    echo "<br>";
    emitirSomAnimal($gato1);
    ?>
</body>
</html>