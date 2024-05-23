<?php
/********* Escalares **********/
// string
$nome = "Olá mundo 123%&";
var_dump($nome); // Essa função mostra informações sobre a variável
echo "<br>";
if(is_string($nome)): // Verifica se a variável é uma string
    echo "É uma String";
else:
    echo "Não é uma String";
endif;
echo "<hr>";

// int
$idade = 18;
var_dump($idade);
echo "<br>";
if(is_int($idade)): // Verifica se a variável é do tipo inteiro
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

// float
$altura = 1.79;
var_dump($altura);
echo "<br>";
if(is_float($altura)): // Verifica se a variável é do tipo float
    echo "É um float";
else:
    echo "Não é um float";
endif;
echo "<hr>";

// boolean
$admin = true;
var_dump($admin);
echo "<br>";
if(is_bool($admin)): // Verifica se a variável é do tipo booleano
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;
echo "<hr>";

/********* Compostos **********/
$carros = array("Gol","Fusca","Camaro",12,20.6,true);
var_dump($carros);
echo "<br>";
if(is_array($carros)): // Verifica se a variável é um array
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

// object
class Cliente {
    public $nome; // Criou um atributo
    public function atribuirNome($nome) { // Criou um método que atribuirá um nome ao atributo acima
        $this->$nome = $nome;
    }
}

$cliente = new Cliente(); // Instanciou a classe Cliente
$cliente->atribuirNome("Natan"); // Utiliza o método criado
var_dump($cliente); 

echo "<br>";
if(is_object($cliente)): // Verifica se a variável é um objeto
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

/********* Especiais **********/
// NULL
$cidade = NULL;
var_dump($cidade);

// Resource
// É um tipo de dado utilizado para fazer referência a recursos externos, ou seja, fazer conexões com banco de dados, manipulação de arquivos...