<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário simples POST com Validação</title>
</head>
<body>

<?php
/* Validações
 * Funcções (filter_input - filter_var)
 * FILTER_VALIDATE_INT
 * FILTER_VALIDATE_EMAIL
 * FILTER_VALIDATE_FLOAT
 * FILTER_VALIDATE_IP
 * FILTER_VALIDATE_URL
 */
?>

<?php
// isset -- Se existe -- Verifica se existe uma variável
if(isset($_POST['enviar-formulario'])){
    // Array de erros
    $erros = array();

    // Validações
    // filter_input (1º Tipo de input. 2º É o nome do campo. 3º É o filtro que queremos validar.)
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    }

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $erros[] = "E-mail inválido.";
    }

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
        $erros[] = "O peso precisa ser um float.";
    }

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
        $erros[] = "IP inválido.";
    }

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
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
        Peso: <input type="text" name="peso"> <br>
        IP: <input type="text" name="ip"> <br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="enviar-formulario"> Enviar </button>
    </form>

    <br><br> 
    <a href="formulario.php"> Vá ao Formulário com Sanitize </a>
</body>
</html>