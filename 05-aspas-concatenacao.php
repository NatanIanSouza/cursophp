<?php
// As aspas simples são literais, ou seja, mesmo que haja variáveis, elas não são interpretadas. Sendo assim, tudo que estiver em aspas simples será considerado um texto.
$nome = 'Natan Ian';
echo 'Meu nome é $nome'; // Irá exibir de maneira literal
echo '<br>';
// Para exibir a variável em aspas simples é necessário concatenar
echo 'Meu nome é '.$nome.' e minha idade é \'23\'';
// Para exibir aspas simples dentro de aspas simples é necessário utilizar \'
echo '<hr>';

// As aspas duplas são interpretativas
echo "Meu nome é \"$nome\"";
// Para exibir aspas duplas dentro de aspas duplas é necessário utilizar \"