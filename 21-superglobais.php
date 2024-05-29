<?php
// Superglobais
/* 
 *  $GLOBALS
 *  $_SERVER
 *  $_REQUEST
 *  $_POST
 *  $_GET
 *  $_FILES
 *  $_ENV
 *  $_COOKIE
 *  $_SESSION
 */

// $GLOBALS -- É uma variável que é usada para acessar variáveis globais de qualquer lugar do script PHP. Ela armazena todas as variáveis globais em um array chamado GLOBALS

$x = 10;
$y = 15;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";

// $_SERVER -- É uma variável superglobal que contém informações sobre cabeçalhos, caminhos e locais de script. Basicamente, é um array que contém os índices. Consultar o manual para saber quais infos você quer puxar.

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";