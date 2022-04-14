<?php
    //conexão com banco de dados: 
    require_once '../php/connect_bd.php';

    mysqli_query($connect, "DELETE FROM user_notes WHERE user_note='" . $_GET['nota']  . "' ");

    if (mysqli_affected_rows($connect)!= 0) {        
        header("Location: ../nav/userNotes.php");
    }
    echo 'erro ao fazer exclusão';
?>