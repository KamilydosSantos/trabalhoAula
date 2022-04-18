<?php
    require_once 'connect_bd.php';
    session_start();

    $cont = 0;
    $getNumRows = mysqli_num_rows(mysqli_query($connect, 'SELECT `user_id` FROM `user_notes` WHERE `user_id`="'.$_SESSION['id'].'"'));
    for($i = 0; $i<=$getNumRows; $i++){
        do{
            $cont++;
            $sql = "SELECT conteudo FROM user_notes WHERE user_note = '$_SESSION[id]-$cont'";
            $getNote[$cont] = mysqli_fetch_array(mysqli_query($GLOBALS["connect"], $sql));
        }while(($getNote[$cont] != "")&&($i < $getNumRows));
    }
    $id_user = $_SESSION["id"];
    $id_note = $_SESSION["id"].'-'.$cont;

    $_POST['conteudo'] = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_SPECIAL_CHARS);
    $_POST['tituloNote'] = filter_input(INPUT_POST, 'tituloNote', FILTER_SANITIZE_SPECIAL_CHARS);
    $_POST['categoria'] = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
    $conteudo = $_POST['conteudo'];
    $titulo = $_POST['tituloNote'];
    $categoria = $_POST['categoria'];

    mysqli_query($GLOBALS["connect"], "INSERT INTO `user_notes` (`user_id`, `user_note`, `conteudo`, `titulo`, `categoria`) VALUES ('$id_user', '$id_note', '$conteudo', '$titulo', '$categoria')");
    header('location: ../nav/userNotes.php');

?>