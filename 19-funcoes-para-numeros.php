<?php
// Funções para Números
/**
 * number_format
 * round
 * ceil
 * floor
 * rand
 */

// number_format -- Serve para formatar números
$db = 1234.56;
$preco = number_format($db, 2, ",", "."); // 1º a Variável. 2º O número de decimais. 3º O separador decimal. 4ª O separador de milhares.
echo "O valor do produto é $preco";

echo "<hr>";

// round -- Serve para arredondar valores
echo round(3.6);
echo "<br>";
echo round(3.4);
echo "<br>";
echo round(3.5);

echo "<hr>";

// ceil -- Também serve para arredondar valores, porém, somente para cima.
echo ceil(4.7);
echo "<br>";
echo ceil(8.1);

echo "<hr>";

// floor - Faz o inverso do ceil, ele arredonda os valores para baixo.
echo floor(4.7);
echo "<br>";
echo floor(8.1);

echo "<hr>";

// rand -- Gera números aleatórios de acordo com a faixa informada. EX: de 1 a 500.
echo rand(1, 500);
echo "<br>";
echo rand(900, 20000);