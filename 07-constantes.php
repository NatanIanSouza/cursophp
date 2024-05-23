<?php
// Constantes
define("NOME", "Natan"); // Declarar sempre com letras maiúscilas
define("IDADE", 18);
define("ALTURA", 1.79);
define("CASADO", true);

// Para definir uma constante do tipo array:
define("TIMES", ['vasco', 'flamengo', 'santos']);

// var_dump(NOME, IDADE, ALTURA, CASADO);

// Para concatenar informações:
echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA;
echo "<hr>";

echo TIMES[0];
// var_dump(TIMES);

echo "<hr>";

// Constantes são globais
function exibeNome() {
    echo NOME;
}

exibeNome();