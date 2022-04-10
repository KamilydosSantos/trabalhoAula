<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/themas.css">
    <?php
        $erro= "";
        if(isset($_POST['registrar'])){
            require_once '../php/registerUser.php';
        }
    ?>
</head>
<body>
    <div id="boxForm">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1>CADASTRO TESTE</h1>
            <p>NOME:</p>
            <input type="text" name="username" id="username">
            <p>E-MAIL:</p>
            <input type="email" name="login" id="login">
            <p>SENHA:</p>
            <input type="password" name="password" id="password">
            <p>CONFIRME SUA SENHA:</p>
            <input type="password" name="password2" id="password2">
            <ul>
                <li>
                    <?php
                    echo $erro;
                    ?>
                </li>
            </ul>
            <button type="submit" name="registrar">Registrar</button>
            <a href="loginPage.php">Já possui conta?<br>Conecte-se agora!</a>
        </form>
    </div>
</body>
</html>