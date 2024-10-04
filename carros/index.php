<?php

// Definindo a classe Empresa
class Empresa 
{
    // Propriedades da classe
    public $nome;
    public $telefone;
    public $celular;

    // Construtor da classe
    public function __construct($nome, $telefone, $celular) 
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->celular = $celular;
    }

    // exibir as informações da empresa
    public function exibirInformacoes() 
    {
        echo "Nome da empresa: " . $this->nome . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
        echo "Celular: " . $this->celular . "<br><br>";
    }
}


    // Criando um objeto da classe Empresa
    $empresa1 = new Empresa("Car automóveis", "(11) 4002-8922", "(11) 70707-07070");

    // Chamando o método para exibir as informações da empresa
    $empresa1->exibirInformacoes();

    // Definindo a classe Carro
    class Carro 
    {
         // Propriedades da classe
        public $marca;  
        public $modelo; 
        public $cor;
        public $ano;
        public $preco;    

        // metodo car
        public function car($marca, $modelo, $cor, $ano, $preco) // definindo os parametros 
        {     
        
        // As propriedades 
        $this->marca = $marca;  
        $this->modelo = $modelo; 
        $this->cor = $cor;
        $this->ano = $ano; 
        $this->preco = $preco;     
        
        }

        // Método para exibir as informações do carro
        public function exibirInformacoes() 
        {
        
            echo "A marca do carro é: " . $this->marca . "<br>"; 
            echo "O modelo do carro é: " . $this->modelo . "<br>";
            echo "A cor do carro é: " . $this->cor . "<br>"; 
            echo "O ano do carro é: " . $this->ano . "<br>";
            echo "O preço do carro é de R$ " . $this->preco . " Reais" . "<br><br>";       
        
        }
    }

    // Criando um objeto 
    $carro1 = new Carro();

    $carro1->car("Hyundai", "HB20", "Preto", 2020, "46.490");

    // Chamando o método para exibir as informações do carro
    $carro1->exibirInformacoes();


?>
