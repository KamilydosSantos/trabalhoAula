<?php
    require_once 'connect_bd.php';

    if(empty($_POST['username'])):
        $erro = "Informe um nome de usuário.";
    elseif (empty($_POST['login'])):
        $erro = "Informe um email para login.";
    elseif (empty($_POST['password'])):
        $erro = "Informe uma senha.";
    elseif (empty($_POST['password2'])):
        $erro = "Confirme sua senha.";
    else:
        if($_POST['password'] === $_POST['password2']):
            $login = mysqli_escape_string($connect, $_POST['login']);
            $testeLogin = mysqli_query($connect, "SELECT email FROM users WHERE email = '$login'");
            if(mysqli_num_rows($testeLogin) > 0):
                $erro = "E-mail informado já possui conta. Tente logar na sua conta antiga ou insira outro e-mail.";
            else:
                $username = mysqli_escape_string($connect, $_POST['username'] = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS));
                $pass = mysqli_escape_string($connect, $_POST['password']);
                mysqli_query($connect, "INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$login', MD5('$pass'))");
                header('location: ../nav/loginPage.php');
            endif;
        else:
            $erro = "senhas não coicidem";
        endif;
    endif;
?>