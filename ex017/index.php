<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtor e Destrutor</title>
</head>
<body>
    <?php 
    //Clase base ou superclasse
    class Produto{
        //Atributos
    public $nome;
    public $preco;

    //Construtor: chamado quando o objeto é criado
        public function __construct($nome, $preco){
        
            $this ->nome = $nome;
            $this ->preco = $preco;
            echo "Produto '$this->nome' criado com sucesso!<br>";

        }
        }
    //Criando um Objeto
    $produto1 = new Produto("Camiseta", 39.90);
    $produto2 = new Produto("Tenis", 300.00);

    ?>
    
</body>
</html>