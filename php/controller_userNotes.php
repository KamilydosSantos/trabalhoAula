<?php
    require_once 'connect_bd.php';
   
    function loadNotes(){
        $cont = 0;
        do{
            $cont++;
            $sql = "SELECT conteudo FROM user_notes WHERE user_note = '$_SESSION[id]-$cont'";
            $getNote[$cont] = mysqli_fetch_array(mysqli_query($GLOBALS["connect"], $sql));
            if($getNote[$cont] != ""){
                print_r($getNote[$cont][0]);
            }
        }while($getNote[$cont] != "");
    }

    function writeNotes(){
        $cont = 0;
        do{
            $cont++;
            $sql = "SELECT conteudo FROM user_notes WHERE user_note = '$_SESSION[id]-$cont'";
            $getNote[$cont] = mysqli_fetch_array(mysqli_query($GLOBALS["connect"], $sql));
        }while($getNote[$cont] != "");

        $id_user = $_SESSION["id"];
        $id_note = $_SESSION["id"].'-'.$cont;
        $_POST['conteudo'] = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_SPECIAL_CHARS);
        $_POST['tituloNote'] = filter_input(INPUT_POST, 'tituloNote', FILTER_SANITIZE_SPECIAL_CHARS);
        $conteudo = '<div class="box"><p class="TitleBox">'.$_POST['tituloNote'].'</p><p class="TextBox">'.$_POST['conteudo'].'</p></div>';

        mysqli_query($GLOBALS["connect"], "INSERT INTO `user_notes` (`user_id`, `user_note`, `conteudo`) VALUES ('$id_user', '$id_note', '$conteudo')");
    }

?>