<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/themas.css">
    <?php
        $erro= "";
        if(isset($_POST['entrar'])){
            require_once '../php/checkLogin.php';
        }
    ?>
</head>

<body>

    <div id="boxForm">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1>LOGIN</h1>
            <p>E-MAIL:</p>
            <input type="email" name="login" id="login">
            <p>SENHA:</p>
            <input type="password" name="password" id="password">
            <ul>
                <?php
                   echo $erro;
                ?>
            </ul>
            <button type="submit" name="entrar">Entrar</button>
            <a href="registerUserPage.php">Não possui conta?<br>Cadastre-se aqui!</a>
        </form>
    </div>
    
    
</body>

</html>