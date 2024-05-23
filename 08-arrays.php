<?php
// Arrays Numéricos -- Quando os índices são números inteiros

// Array padrão:
// $carros = array("BMW", "Veloster", "Hilux");

// Array indicando os índices:
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok"; // Insere no índice seguinte.
$carros[10] = "Camaro"; // Insere no índice escolhido.

// Para exibir um elemento de um indice específico:
echo $carros[10];

// Função específica para exibir arrays:
// print_r($carros); 

echo "<br>";

// Outra maneira de criar Arrays:
$motos = array();
$motos[] = " Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
// print_r($motos);
echo "<br>";

// Outra forma de criar Arrays:
$clientes = ["Robertinho", "Danilo", "Alexa"];
print_r($clientes);

// var_dump($carros);
echo "<hr>";

// Count - Serve para exibir a quantidade de elementos que contém em um Array.
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach -- Loop para percorres Arrays.
foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

////////////////////////

// Arrays Associativos -- Quando os índices (ou chaves) são Strings
$pessoa = array("nome"=> "Natan", "idade"=> 18, "altura"=> 1.79);
$pessoa["cidade"] = "Lins";
// echo $pessoa["idade"];
// print_r($pessoa);
foreach($pessoa as $indice => $valor) { // Desta vez, percorremos o Array e trouxemos os índices também.
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";

//////////////////////

// Arrays multidimensionais -- Contém 1 ou mais arrays.
$times = array(
        "cariocas" => array("vasco", "flamengo", "botafogo"),
        "paulistas" => array("santos", "sao paulo", "palmeiras"),
        "baianos" => array("bahia", "vitoria", "itabuna")
        );
echo $times["cariocas"][1];