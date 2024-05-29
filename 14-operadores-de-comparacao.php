<?php
// Operadores de Comparação
// ==
// !=
// ===
// !===
// <>
// <
// >
// <=
// >= 
// <=>

if(10 == "10") {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

if(10 != 11) {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

// Verifica se é idêntico (===)
if(10 === "10") {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

// Verifica se não é idêntico (!==)
if(10 !== 11) {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

// Verifica se é diferente (<>)
if(10 <> 11) {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

if(10 < 9) {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

if(10 > 1) {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

if(10 >= 1) {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

if(90 <= 10) {
    echo "Positivo. <br>";
} else {
    echo "Negativo. <br>";
}

echo "<hr>";

// <=> só pode retornar 3 valores, serve para fazer comparações combinadas
var_dump(20 <=> 30);
echo "<br>";
var_dump(20 <=> 20);
echo "<br>";
var_dump(20 <=> 10);