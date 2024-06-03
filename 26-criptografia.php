<?php
$senha = "123456";

// base64 -- É uma criptografia de mão dupla, onde temos uma função para codificar e outra função para descodificar.
$novasenha = base64_encode($senha);
echo "Base64: ". $novasenha . "<br>";
echo "Sua senha é: ". base64_decode($novasenha);
echo "<hr>";

// md5 -- É uma criptografia de mão única, ou seja, só é possível criptografar. Não conseguimos descriptografar.
echo "Md5: ". md5($senha);
echo "<hr>";

// sha1 -- Também é uma criptografia de mão única.
echo "Sha1: ". sha1($senha);
echo "<hr>";

// Infelizmente, todas essas criptografias são vulneráveis, pois mesmo as de mão única, existem sites como crackstation.net que conseguem "descriptografar"

//////////////////////////////
// Password Hash -- é uma criptografia segura, gerada pelo PHP. Colocar 255 caracteres no Banco de Dados.

// $options = [ // Esse "custo" serve para definir o nível de segurança do hash, quanto maior, mais seguro. Porém, quanto maior, mais recursos de hardware exigirá e consumirá. Então caso for usar, deioxar no 10 (padrão). 
//     'cost' => 10
// ];

// $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
// echo $senhaSegura;

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;

$senha_db = '$2y$10$5cvu8WP5CCmvM2s/iVsLr.Nw3QeXmFfjHPwFAoZ43Cp54pr9p9kiS'; // Hash gerado pelo password_hash.
echo "<br>";

if(password_verify($senha, $senha_db)){ // Para fazer a autenticação da senha, para trabalhar com banco de dados.
    echo "Senha válida";
} else {
    echo "Senha inválida";
}