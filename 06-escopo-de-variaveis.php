<?php
// ESCOPO GLOBAL
$nome = "Natan Ian";
$a = 1;
$b = 3;
$c = 7;

function exibeNome() { // Uma função é um ESCOPO LOCAL
    global $nome; // Define uma variável como global
    echo $nome;
}

exibeNome();
echo "<hr>";
///////////////////////////////

function exibeCidade() {
    //ESCOPO LOCAL
    global $cidade; // Para conseguirmos acessar essa variável, precisamos definir ela como global
    $cidade = "Lins";
}

exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////////////

// Outra forma de acessar variáveis do escopo global
function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();