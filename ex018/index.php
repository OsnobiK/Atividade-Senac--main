<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de Acesso</title>
</head>
<body>
    <?php 
    class Funcionario{
        //Propriedade com diferentes modificadores de acesso
        public $nome; //Pode ser acessado de qualquer lugar
        protected $salario; //Pode ser acessado apenas dentro da superclasse e subclasse
        private $cpf; //Pode ser acessado apenas dentro da classe

        //Construtor para inicializar os valores
        public function __construct($nome, $salario, $cpf){
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cpf = $cpf;
        }

        //Método público para exibir o nome do funcionário
        public function exibirNome(){
            echo "Nome: " . $this->nome . "<br>";
        }

        //Método protegido para exibir o salário (somente para subclasses ou na própria classe)
        protected function exibirSalario(){
            echo "Salário: R$ " . $this->salario . "<br>";
        }

        //Método privado para exibir o CPF (somente dentro da classe)
        private function exibirCpf(){
            echo "CPF: " . $this->cpf . "<br>";
        }

        //Método público para chamar o método privado e protegido na própria classe
        public function exibirDetalhes(){
            $this->exibirNome();
            $this->exibirSalario();
            $this->exibirCpf();
        }
    }

    //Criando uma instância da classe Funcionário
    $funcionario1 = new Funcionario("Carlos Silva", 7000, "123.456.789-00");

    //Acesando o nome diretamente (público)
    $funcionario1->exibirNome();

    //Acessando o salário diretamente (protegido) 
    // $funcionario1->exibirSalario(); //comentado porque gera erro

    //Acessando o CPF diretamente (privado)
    // $funcionario1->exibirCpf(); //comentado porque gera erro

    //Chamando o método público que acesso todos os dados
    $funcionario1->exibirDetalhes();

    ?>
</body>
</html>