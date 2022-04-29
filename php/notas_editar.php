<?php
    //conexão com banco de dados: 
    require_once 'connect_bd.php';

    $_POST['conteudo'] = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_SPECIAL_CHARS);
    $_POST['titulo'] = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $_POST['categoria'] = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
    $conteudo = $_POST['conteudo'];
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];

    $sql = "UPDATE user_notes SET ";
	$sql = $sql . " titulo     = '" . $titulo . "',"; 
	$sql = $sql . " conteudo             = '" . $conteudo  . "',"; 
	$sql = $sql . " categoria           = '" . $categoria . "'"; 
	$sql = $sql . " WHERE user_note ='" . $_POST['user_note'] . "'";

    $executaQuery = mysqli_query($GLOBALS["connect"], $sql);
    
    header("Location: ../nav/userNotes.php?nota=" . $_POST['user_note']);
    
    /*if (mysqli_affected_rows($connect)!= 0) {        
        header("Location: ../nav/userNotes.php");
    }else{
        header("Location: ../nav/editNote.php?nota=" . $_POST['user_note']);
    }*/
    
?>