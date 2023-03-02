<?php
    // Inicie a sessão
    session_start();
    // Conexão com o banco de dados
    include_once ("conexão.php");

    // Receba as informações do formulário
    $username = $_POST['email'];
    $password = $_POST['password'];
    

    

    // Consulta ao banco de dados
    $query = "SELECT * FROM usuarios WHERE email='$username'";
    $result = mysqli_query($conn, $query);

    // Verificação de usuário e senha
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Inicie a sessão e redirecione para a página principal
            $_SESSION['email'] = $username;
            header('Location: index.php');
        } else {
            echo "Senha incorreta";
        }
    } else {
        echo "Usuário não encontrado";
    }
