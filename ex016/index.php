<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <?php 
    class Carro {
        //Propriedades ou atributos
        public $marca;
        public $modelo;
        public $ano;

        //Método (Função dentro de uma classe)
        public function exibirDetalhes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";


        }
    }

    //Instanciando um objeto
    $meuCarro = new Carro();
    $meuCarro->marca = "Toyota";
    $meuCarro->modelo = "Corolla";
    $meuCarro->ano = 2023;

    $meuCarro->exibirDetalhes(); //Exibir detalhes do carro


    //Nova classe
    class Pessoa {
        public $nome;
        public $idade;

        //Metodo
        public function saudacao(){
    echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos. <br>";

        }
    }
    
    $bryan = new Pessoa();

    $bryan->nome = "Bryan";
    $bryan->idade = 16;
    $bryan->saudacao(); //Exibe a saudação com o nome e idade da pessoa.
    
    ?>
    
</body>
</html>