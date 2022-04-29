<?php
    require_once '../php/connect_bd.php';
    session_start();
    $dados = mysqli_fetch_array(mysqli_query($connect, 'SELECT * FROM users WHERE user_id = '.$_SESSION["id"]));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/leftBar.css">
    <link rel="stylesheet" href="../css/layoutFlex.css">
    <link rel="stylesheet" href="../css/styleGeral.css">
    <link rel="stylesheet" href="../css/themas.css">
    <?php require_once '../components/leftBar.php';?>
</head>
<body>
    <div id='sobre'>
    <div class="panel">
        <h3>SOBRE O SITE</h3>
        <p>O projeto foi desenvolvido para fins avaliativos da disiplina "Programação Para Web", do 4º ano do curso Integrado Técnico em Informática 
        do IFSUL Campus Camaquã. Alunos responsáveis pelo desenvolvimento: 
        </p>
        <div class="box_sobre">
            <div class="img_sobre">
                <img src="https://avatars.githubusercontent.com/u/102933216?v=4">
            </div>
            <div>
                <p>Kamily dos Santos</p>
                <p>18 anos, estudante de Informática no IFSUL-Camaquã.</p>
            </div>
        </div>
        <div class="box_sobre">
            <div class="img_sobre">
                <img src="https://avatars.githubusercontent.com/u/103265478?v=4">
            </div>
            <div>
                <p>Kayana da S. Lacerda</p>
                <p>19 anos, estudante de Informática no IFSUL-Camaquã.</p>
            </div>
        </div>
        <div class="box_sobre">
            <div class="img_sobre">
                <img src="https://avatars.githubusercontent.com/u/103263623?v=4">
            </div>
            <div>
                <p>Thiago R. Kawski</p>
                <p>19 anos, estudante de Informática no IFSUL-Camaquã.</p>
            </div>
        </div>
    </div>
    <div id="bt_sobre_box">
        <a id="bt_sobre" href="../nav/userNotes.php">VOLTAR</a>
    </div>
    </div>
</body>
</html>