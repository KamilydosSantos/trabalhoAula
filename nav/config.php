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
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/leftBar.css">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/themas.css">
    <script src="../js/controller_userNotes.js"></script>
    <?php require_once '../components/leftBar.php';?>
</head>
<body>
    <div class="panelConfig">
        <h3>DEFINA O TEMA QUE DESEJA UTILIZAR:</h3>
    </div>
    <div class="panelConfig">
        <buttom class="boxConfig">
            <img src="../images/tema01.png">
        </buttom>
        <buttom class="boxConfig">
            <img src="../images/tema01.png">
        </buttom>
        <buttom class="boxConfig">
            <img src="../images/tema01.png">
        </buttom>
    </div>
</body>
</html>