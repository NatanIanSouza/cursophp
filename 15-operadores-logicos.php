<?php
// Operadores Lógicos
// Nos permitem fazer comparações entre expressões
// 
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 25;
$nome = "Natan";


// também pode ser usado "and" no lugar de &&
if (($idade == 25) && ($nome == "Natan")){ // Retorna o resultado somente se as duas expressões forem verdadeiras
    echo "É verdadeiro <br>";
} else {
    echo "É falso <br>";
}

// também pode ser usado "or" no lugar de ||
if (($idade == 26) || ($nome == "Natan")){ // Retorna o resultado se pelo menos uma das expressões (ou todas) for verdadeira 
    echo "É verdadeiro <br>";
} else {
    echo "É falso <br>";
}

if (($idade == 25) xor ($nome == "Natan")){ // Retorna o resultado verdadeiro somente quando UMA expressão é verdadedira.
    echo "É verdadeiro <br>";
} else {
    echo "É falso <br>"; // Se as duas expressões forem verdadeiras, ele retorna falso.
}

if (!($idade == 25) and !($nome == "Natan")){
    echo "É verdadeiro <br>";
} else {
    echo "É falso <br>";
}