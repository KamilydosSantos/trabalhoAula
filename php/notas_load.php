<?php
    $cont = 0;
    do{
        $cont++;
        $sql = "SELECT conteudo, titulo FROM user_notes WHERE user_note = '$_SESSION[id]-$cont'";
        $getNote[$cont] = mysqli_fetch_array(mysqli_query($GLOBALS["connect"], $sql));

        if($getNote[$cont] != ""){
            print_r('<div class="box"><p class="TitleBox">'.$getNote[$cont]['titulo'].'</p><p class="TextBox">'.$getNote[$cont]['conteudo'].'</p></div>');
        }
    }while($getNote[$cont] != "");
?>