<?php
session_start();
include_once ("conexão.php");

$nome = filter_input (INPUT_POST, 'nome');
$email = filter_input (INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

// Versão criptografada da senha usando a função password_hash()
$senha_criptografada = password_hash($password, PASSWORD_DEFAULT);


$result_usuario = "INSERT INTO usuarios (nome, email, password, created) VALUES ( '$nome', '$email', '$senha_criptografada', NOW())";
$resultado_usuarios = mysqli_query ($conn, $result_usuario);


if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: index.php");

}else{
    $_SESSION['msg'] = "<p style= 'color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: index.php");

}

?>