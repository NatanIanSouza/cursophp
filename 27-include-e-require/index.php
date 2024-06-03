<?php
// Include e Require -- As duas funções servem para incluir o conteúdo de um arquivo PHP em outro arquivo PHP

// require 'header.php';
require_once 'header.php'; // O include_once ou require_once servem para o PHP verificar se o arquivo já foi incluído. Se sim, não incluirá novamente.

// A diferença entre require e include é que, se o caminho do arquivo estiver errado, o require dá erro e interrompe o script. O includo dá erro mas continua o script.

?>

<?php echo "Olá pessoal"; ?>

<?php
// include 'footer.php';
include_once 'footer.php';
?>