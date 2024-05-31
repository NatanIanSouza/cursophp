<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>
<body>

<?php
// Se houver esse índice abaixo, é porque o usuário clicou no botão "enviar-formulario"
if(isset($_POST['enviar-formulario'])){
    $arquivosPermitidos = array("png", "jpg", "jpeg", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // pathinfo -- Função utilizada para pegar a extensão de um arquivo. 1º Nome do arquivo. 2º A informação que queremos. 
    
    if(in_array($extensao, $arquivosPermitidos)){
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao"; // uniqid -- serve para gerar um novo nome.

        if(move_uploaded_file($temporario, $pasta.$novoNome)){ // Função para fazer o upload do arquivo. (move_uploaded_file) 1º Arquivo temporário. 2ª O destino do arquivo
            $mensagem = "Upload feito com sucesso!";
        } else {
            $mensagem = "Erro, não foi possível fazer o upload";
        }
    } else {
        $mensagem = "Formato Inválido";
    }

    echo $mensagem;
// var_dump($_FILES);
}


?>

    <!-- enctype="multipart/form-data" -- Sem isso aqui, não existe upload de arquivos -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo"> <br>
        <input type="submit" name="enviar-formulario">
    </form>
</body>
</html>