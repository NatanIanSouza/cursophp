<?php

for ($contador = 0; $contador <= 10; $contador++) {
    echo "O contador é $contador <br>";
}

echo "<hr>";

for ($contador = 0; $contador <= 10; $contador++) {
    echo "8 x $contador = ".($contador*8)."<br>";
}

echo "<hr>";

$cores = array("Vermelho", "Amarelo", "Azul", "Verde");

// O foreach é utilizado para percorrer arrays
foreach($cores as $valor) { // Para cada item do array, ele atribui a variável $valor
    echo "$valor <br>";
}

echo "<hr>";

// Agora mostrando os índices
foreach($cores as $indice => $valor) {
    echo $indice . " - " . $valor . "<br>";
}