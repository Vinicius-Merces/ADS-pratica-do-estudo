<?php
session_start();
include_once ("conexão.php");

$nome = filter_input (INPUT_POST, 'nome');
$email = filter_input (INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);

// echo "Nome: $nome <br>" ;
// echo "E-mail: $email" ;

$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ( '$nome', '$email', NOW())";
$resultado_usaurios = mysqli_query ($conn, $result_usuario);


if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: index.php");

}else{
    $_SESSION['msg'] = "<p style= 'color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: index.php");

}