<?php
    //conxão ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "bdt-teste_php_01";

    $connect = mysqli_connect($servername, $username, $password, $db_name);

    if(mysqli_connect_error()){
        echo "falha na conexão: ".mysqli_connect_error();
    }
?>