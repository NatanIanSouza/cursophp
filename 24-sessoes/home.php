<?php
session_start();

// Exemplo de que conseguimos utilizar a sessão criada em uma outra página
echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br>";
echo session_id();