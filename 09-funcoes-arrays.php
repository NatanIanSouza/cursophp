<?php
/*
 * is_array($array) = verificar se uma determinada variável é um array
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
 * array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro (cria um array com os índices do array escolhido)
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro (cria um array com os valores do array escolhido)
 * array_merge($array1, $array2) = agrega o conteúdo de dois arrays
 * array_pop($array) = exclui a última posição do array
 * array_shift($array) = exclui a primeira posição do array
 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array
 * array_push($array, "valor", "valor") = adiciona um ou mais elementos no fim do array
 * array_combine($keys, $values) = mescla dois arrays, sendo o primeiro parâmetro as chaves/índices e o segundo os valores
 * array_sum() = calcula a soma dos elementos de um array
 * explode("/", "29/05/2024") = transforma string em array
 * implode("-", $array) = transforma array em string
 */

$nomes = array("Natan", "Felipe", "Matheus", "Bernardo");

$familia = array("Pai" => "Natan", "Tio"=> "Felipe", "Mãe"=> "Barbarete", "Filho" => "Bernardo");

// is_array
if(is_array($nomes)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

// in_array
if(in_array("Natan", $nomes)):
    echo "Existe no array";
else: 
    echo "Não existe no array";
endif;
echo "<hr>";

// array_keys
$keys = array_keys($familia);
print_r($keys);
echo "<hr>";

// array_values
$values = array_values($familia);
print_r($values);
echo "<hr>";

///////////////////////////////

$carros = array("Camaro", "Uno", "Gol");
$motos = array("CB1000", "R15", "Factor 150");

// array_merge
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

// array_pop
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros);
echo "<hr>";

// foreach($carros as $valor){
//     echo $valor."<br>";
// }

$carros[2] = "Gol"; // Adicionando novamente ao vetor

// array_shift
print_r($carros);
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);
echo "<hr>";

///////////////////////////////

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<br>";

// array_unshift
array_unshift($frutas, "Manga", "Acerola", "Morango");
print_r($frutas);
echo "<br>";

array_shift($frutas); // Para voltar ao array original, apaguei os itens adicionados
array_shift($frutas);
array_shift($frutas);

// array_push
array_push($frutas, "Manga", "Acerola", "Morango");
print_r($frutas);
echo "<hr>";

//////////////////////////////

$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");

// array_combine
$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

/////////////////////////////

$soma = array(5,9.3,27,1.8);

// array_sum
$total = array_sum($soma);
echo $total;
// dá para fazer direto no echo também
echo "<br>".array_sum($soma);
echo "<hr>";

////////////////////////////

$data = "29/05/2024";
$frase = "Meu nome não é Jhonny";

// explode
$novaData = explode("/", $data);
print_r($novaData);
echo "<br>";

$array = explode(" ", $frase);
print_r($array);
echo "<hr>";

///////////////////////////

$pessoas = array("Natan", "Rodrigo", "Solimões", "Neusa");

// implode
$string = implode(", ", $pessoas);
echo $string;