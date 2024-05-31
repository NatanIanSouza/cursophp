<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário simples POST com Validação e Sanitize</title>
</head>
<body>

<?php
/* Validações -- Filtros utilizados para de fato validar se as informações são verdadeiras ou falsas.
 * Funcções (filter_input - filter_var)
 * FILTER_VALIDATE_INT
 * FILTER_VALIDATE_EMAIL
 * FILTER_VALIDATE_FLOAT
 * FILTER_VALIDATE_IP
 * FILTER_VALIDATE_URL
 * 
 * Sanitização -- Filtros utilizados para limpar as variáveis
 * Funções (filter_input - filter_var)
 * FILTER_SANITIZE_SPECIAL_CHARS
 * FILTER_SANITIZE_NUMBER_INT
 * FILTER_SANITIZE_EMAIL
 * FILTER_SANITIZE_URL
 */
?>

<?php
// isset -- Se existe -- Verifica se existe uma variável
if(isset($_POST['enviar-formulario'])){
    // Array de erros
    $erros = array();

    // Sanitizações e Validações
    // filter_input (1º Tipo de input. 2º É o nome do campo. 3º É o filtro que queremos validar.)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // Basicamente, impede que o usuário insira tags HTML no input, sendo assim, imprime exatamente o que foi escrito.

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); // Limpa a variável, removendo todos os caracters que não sejam números
    // filter_var -- Serve para validarmos uma variável. 1º A variável. 2º O filtro.
    if(!filter_var($idade, FILTER_VALIDATE_INT)) { 
        $erros[] = "Idade precisa ser um inteiro";
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); // Limpa a variável, removendo espaços e caractéres inválidos para e-mail.
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "E-mail inválido.";
    }

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL); // Limpa a variável, removendo espaços e caractére inválidos para URL.
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        $erros[] = "URL inválida.";
    }

    // Exibindo mensagens
    if(!empty($erros)){ // empty -- Verifica se a variável está vazia (OBS: nessa situação, estamos negando isso)
        foreach($erros as $values) {
            echo "<li> $values </li>";
        }
    } else {
        echo "Parabéns! Seus dados estão corretos.";
    }
}
?>

    <!-- No método POST os dados são enviados para o php de forma invisível -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; // Retornará o nome do arquivo em que está sendo executado esse script (index.php)?>">
        Nome: <input type="text" name="nome"> <br>
        Idade: <input type="text" name="idade"> <br>
        E-mail: <input type="text" name="email"> <br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="enviar-formulario"> Enviar </button>
    </form>
</body>
</html>