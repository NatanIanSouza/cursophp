<?php
/* 
 * Condicionais
 * if
 * else
 * elseif
 */

$numero = 3;

if ($numero == 10) {
    echo "É igual a 10";
}
elseif($numero <= 9){
    echo "É menor ou igual a 9";
}
else {
    echo "É diferente de 10";
}

echo "<hr>"; 

$media = 7;

// uma maneira mais simples de escrever o if e o else:
echo ($media == 7) ? "Aprovado" : "Reprovado";
echo "<hr><hr>";

////////////////////////////////////////
/* 
 * Condicionais
 * switch
 * case
 */

$cor = "Azul";

switch ($cor) {
    case "Vermelho":
        echo "Sua cor preferida é o vermelho";
    break;

    case "Azul":
        echo "Sua cor preferida é o azul";
    break;

    case "Verde":
        echo "Sua cor preferida é o verde";
    break;

    default:
        echo "Sua cor preferida não é vermelho, azul ou verde.";
    break;
}