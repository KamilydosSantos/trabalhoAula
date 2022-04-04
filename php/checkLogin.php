<?php
    //conexão com banco de dados: 
    require_once 'connect_bd.php';

    //filtrando dados de login:


    //checando dados de login:
    if(empty($_POST['login']) or empty($_POST['password'])){
        $erro = "<li>Preencha todos os campos</li>";
    }else{
        $login = mysqli_escape_string($connect, $_POST['login']);
        $testeLogin = mysqli_query($connect, "SELECT email FROM users WHERE email = '$login'");
        if(mysqli_num_rows($testeLogin) == 1){
            $senha = mysqli_escape_string($connect, MD5($_POST['password']));
            $testeLogin = mysqli_query($connect, "SELECT * FROM users WHERE email = '$login' AND password = '$senha'");

            if(mysqli_num_rows($testeLogin) == 1){
                $testeLogin = mysqli_fetch_array($testeLogin);
                session_start();
                $_SESSION['logado'] = true;
                $_SESSION['id'] = $testeLogin['user_id'];
                $_SESSION['username'] = $testeLogin['username'];
                header('location: ../nav/userNotes.php');
            }else{
                $erro = "<li>Dados não coincidem.</li>";
            }
        }else{
            $erro = "<li>Dados não coincidem.</li>";
        }
    }
?>