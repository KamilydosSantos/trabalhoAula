<?php
    //conexão com banco de dados: 
    require_once '../php/connect_bd.php';

    mysqli_query($connect, "SELECT * FROM user_notes WHERE user_note='" . $_GET['nota']  . "' ");
    
?>