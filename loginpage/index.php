<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Projeto teste</title>
</head>

<body>
    <h1>Cadastro de Usuário</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="processa.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="Insira uma senha forte!"><br><br>

        <label>Data de nascimento: </label>
        <input type="date" name="bdate" placeholder="dd/mm/aaaa"><br><br>

        <input type="submit" value="Cadastrar">

    </form>

    <div>
        <button id="botao" class="dropbtn">Faça o login</button>
        <div id="elemento" style="display:none;">
            <form class="dropdown-content" method="POST" action="login.php">

                <label>E-mail: </label>
                <input type="email" name="email" placeholder="Digite seu e-mail de login"><br><br>

                <label>Senha: </label>
                <input type="password" name="password" placeholder="Digite sua senha"><br><br>

                <input type="submit" value="Login">
            </form>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>