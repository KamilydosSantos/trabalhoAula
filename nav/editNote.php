<?php
    //conexão com banco de dados: 
    require_once '../php/connect_bd.php';

    $sql = "SELECT * FROM user_notes WHERE user_note='" . $_GET['nota']  . "' ";
    $getNote = mysqli_fetch_assoc(mysqli_query($GLOBALS["connect"], $sql));

    
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
    <link rel="stylesheet" href="../css/layoutFlex.css">
    <link rel="stylesheet" href="../css/styleGeral.css">
    <link rel="stylesheet" href="../css/themas.css">
    <script src="../js/controller_userNotes.js"></script>
    <?php require_once '../components/leftBar.php';?>
</head>
<body>
    <section id="panel_addNote" style = "visibility: visible; backdrop-filter: none; z-index: 1;">
        <form action="../php/notas_editar.php" method="POST">
            <input type="hidden" name="user_note" value="<?= $_GET['nota'] ?>">
            <p>Titulo da nota</p>
            <input type="text" name="titulo" id="tituloNote" value = "<?=  $getNote['titulo'] ?>" onkeyup="validateDate()">
            <p>Conteudo da nota</p>
            <textarea name="conteudo" id="conteudo" onkeyup="validateDate()"><?=  $getNote['conteudo'] ?></textarea>
            <p>Selecione uma categoria</p>
            <select class="form-select" id="categoria" name="categoria">
                <option value="Pessoal"<?php if($getNote['categoria'] == 'Pessoal'){ echo ' selected="selected"'; } ?>>Pessoal</option>
                <option value="Escola"<?php if($getNote['categoria'] == 'Escola'){ echo ' selected="selected"'; } ?>>Escola</option>
                <option value="Trabalho"<?php if($getNote['categoria'] == 'Trabalho'){ echo ' selected="selected"'; } ?>>Trabalho</option>
            </select>
            <p id="aviso"></p>
            <button type="button">CANCELAR</button>
            <button type="submit" id="enviarNote" name="enviarNote">SALVAR</button>
        </form>
    </section>
    
</body>
</html>