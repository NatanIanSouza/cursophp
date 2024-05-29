<?php
// Criando Funções

function exibirNome(){
    echo "Meu nome é Natan <br>";
}

exibirNome();

function exibirNome2($nome) { // Dessa maneira nós adicionamos o valor $nome quando chamamos a função
    echo "Meu nome é $nome";
}

exibirNome2("Graciele Silva");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 6) {
        echo "Parabéns, $nome! Você foi aprovado com a média $media <br>";
    } else {
        echo "Meus pêsames, $nome. Você foi reprovado com a média $media <br>";
    }
}

calcularMedia("Natan", 8, 7, 9, 10);
calcularMedia("Carlos", 3, 1, 4, 2);