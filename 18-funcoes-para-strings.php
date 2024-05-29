<?php
// Funções para Strings
/* strtoupper
 * strtolower
 * substr
 * str_pad
 * str_repeat
 * strlen
 * str_replace
 * strpos
 */

$nome = "natan ian";
$nome2 = "NATAN IAN";

// strtoupper
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<br>";

// strtolower
$nomeMIN = strtolower($nome2);
echo $nomeMIN;

echo "<hr>";

// substr
$mensagem = "Olá mundo";
echo substr($mensagem, 4, 5); // Primeiro parâmetro é a string, 2º define a partir de qual caracter será exibido e 3º (opcional) define quantos caracteres serão utilizados à partir do parâmetro anterior. Ver exemplos.

echo "<hr>";

// str_pad -- essa função complementa uma outra string com uma quantidade especificada de caracteres
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7); // Informa a quantidade de caracteres que a nova string terá
echo "$novoObjeto <br>";

$novoObjeto2 = str_pad($objeto, 7, "*"); // O 3º parâmetro serve para especificar o caracter a ser acrescentado na string
echo "$novoObjeto2 <br>";

$novoObjeto3 = str_pad($objeto, 10, "*", STR_PAD_LEFT); // o 4º parâmetro informará a posição onde será adicionado a nova string. Ex: deixar na esquerda.
echo "$novoObjeto3 <br>";
$novoObjeto3 = str_pad($objeto, 10, "*", STR_PAD_RIGHT);
echo "$novoObjeto3 <br>";
$novoObjeto3 = str_pad($objeto, 10, "*", STR_PAD_BOTH);
echo "$novoObjeto3 <br>";

echo "<hr>";

///////////////////////////

// str_repeat -- serve para repetir uma string
$string = str_repeat("Sucesso!", 5); // O 1º parâmetro é a string a ser repetida e o 2º parâmetro é a quantidade de vezes que repetirá
echo $string;
echo "<hr>";

// strlen -- Retorna o comprimento de uma String
$mensagem = "Olá Mundo!";
echo strlen($mensagem);
echo "<hr>";

// str_replace -- Serve para substituir uma palavra em um texto
$texto = "A seleção Argentina será a campeã da Copa do Mundo em 2028.";
echo "$texto <br>";
$novoTexto = str_replace("Argentina", "Brasileira", $texto); // 1º A palavra que será substituída. 2º A palavra que substituirá. 3º A string
echo "$novoTexto";

echo "<hr>";

// strpos -- Nos retorna a posição de uma palavra em um texto
echo strpos($texto, "Copa");
echo "<br>";
echo strpos($novoTexto, "Copa");