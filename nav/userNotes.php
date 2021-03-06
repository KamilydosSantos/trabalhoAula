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
    <link rel="stylesheet" href="../css/layoutFlex.css">
    <link rel="stylesheet" href="../css/styleGeral.css">
    <link rel="stylesheet" href="../css/themas.css">
    <script src="../js/controller_userNotes.js"></script>
    <?php require_once '../components/leftBar.php';?>
</head>
<body>
    <section id="panel_addNote">
        <form action="../php/notas_add.php" method="POST">
            <p>Titulo da nota</p>
            <input type="text" name="tituloNote" id="tituloNote" onkeyup="validateDate()">
            <p>Conteudo da nota</p>
            <textarea name="conteudo" id="conteudo" onkeyup="validateDate()"></textarea>
            <p>Selecione uma categoria</p>
            <select class="form-select" id="categoria" name="categoria">
                <option value="Pessoal">Pessoal</option>
                <option value="Escola">Escola</option>
                <option value="Trabalho">Trabalho</option>
            </select>
            <p id="aviso"></p>
            <button type="button" onclick="setVisible_false()">CANCELAR</button>
            <button type="submit" id="enviarNote" name="enviarNote">SALVAR</button>
        </form>
    </section>

    <header class="panel">
        <h3>NOTAS INDIVIDUAIS</h3>
        <button onclick="setVisible_true()" id="setVisible-insertNewNote">ADICIONAR NOTA</button>
        <form action="" method="POST">
            <select onchange="this.form.submit()" class="form-select" id="panelCategoria" name="panelCategoria">
                <option value="Todas">TODAS</option>
                <option value="Pessoal">PESSOAL</option>
                <option value="Escola">ESCOLA</option>
                <option value="Trabalho">TRABALHO</option>
            </select>
        </form>
    </header>
    <section class="panel">
        <?php
            require_once '../php/notas_load.php';
        ?>
    </section>
</body>
</html>