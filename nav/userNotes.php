<?php
    require_once '../php/controller_userNotes.php';
    session_start();
    $dados = mysqli_fetch_array(mysqli_query($connect, 'SELECT * FROM users WHERE user_id = '.$_SESSION["id"]));

    if(isset($_POST['enviarNote'])){
        writeNotes();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/leftBar.css">
    <link rel="stylesheet" href="../css/layoutFlex.css">
    <link rel="stylesheet" href="../css/styleGeral.css">
    <script src="../js/controller_userNotes.js"></script>
    <?php require_once '../components/leftBar.php';?>
</head>
<body>
    
    <section id="panel_addNote">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p>Titulo da nota</p>
            <input type="text" name="tituloNote" id="tituloNote" onkeyup="validateDate()">
            <p>Conteudo da nota</p>
            <textarea name="conteudo" id="conteudo" onkeyup="validateDate()"></textarea>
            <p id="aviso"></p>
            <button type="button" onclick="setVisible_false()">CANCELAR</button>
            <button type="submit" id="enviarNote" name="enviarNote">SALVAR</button>
        </form>
    </section>

    <header class="panel">
        <button onclick="setVisible_true()" id="setVisible-insertNewNote">ADICIONAR NOTA</button>
    </header>
    
    <section class="panel">
        <?php
            loadNotes();
        ?>
    </section>
</body>
</html>