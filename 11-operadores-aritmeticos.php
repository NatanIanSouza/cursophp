<?php
/* 
 * Operadores aritmeticos
 * 
 * São usados com valores numéricos para executar operações aritméticas
 * comuns, como adição, subtração, multiplicação, etc.
 * 
 * Adição +
 * Subrtração -
 * Multiplicação *
 * Divisão /
 * Módulo %
 * Exponenciação **
 */

echo 10 + 10 ."<br>";
echo 15 - 5 ."<br>";
echo 3 * 5 ."<br>";
echo 15 / 5 ."<br>";
echo 15 % 4 ."<br>";
echo 2 ** 8 ."<br>";
echo "<br><hr>";

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$soma = $a + $b;
echo $soma;
echo "<hr>";

$subtracao = $c - $a;
echo $subtracao;
echo "<hr>";

$multiplicacao = $d * $a;
echo $multiplicacao;
echo "<hr>";

$divisao = $c / $a;
echo $divisao;
echo "<hr>";

$modulo = $e % $d;
echo $modulo;
echo "<hr>";

$expo = $a ** $d;
echo $expo;
echo "<hr>";

echo (5 + 7 + 9 + 8) / 4;