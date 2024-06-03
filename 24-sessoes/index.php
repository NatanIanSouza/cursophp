<?php
// Sessões - Servem pra armazenar informações que poderão ser utilizadas em várias páginas, geralmente utilizamos sessões para criar carrinhos de compra, sistemas de login, entre outros.
// Sempre que for trabalhar com sessões, é preciso iniciar ela no início de todas as páginas.
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br>";
echo session_id(); // Serve para exibir o número de ID da sessão criada.