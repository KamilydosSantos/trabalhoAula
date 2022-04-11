<?php
    $cont = 0;
    do{
        $cont++;
        $sql = "SELECT conteudo, titulo, user_note FROM user_notes WHERE user_note = '$_SESSION[id]-$cont'";
        $getNote[$cont] = mysqli_fetch_array(mysqli_query($GLOBALS["connect"], $sql));

        if($getNote[$cont] != ""){
?>
            <div class="box">
                <p class="TitleBox">
                    <?=  $getNote[$cont]['titulo'] ?>
                </p>
                <p class="TextBox">
                    <?=  $getNote[$cont]['conteudo'] ?>
                </p>
                <div class="buttons">
                <form method="post" action="">
                    <a href="deleteNote.php?nota=<?= $getNote[$cont]['user_note']?>">   
                        <div class="btnExcluir" type="submit" id='btnApagar' onclick="Excluir()">EXCLUIR</div> 
                    </a>
                    <a href="editNote.php?nota=<?= $getNote[$cont]['user_note']?>">
                        <div class="btnEditar" type="submit" id='btnAlterar'>EDITAR</div> 
                    </a>
                </form>
                </div>
            </div>
<?php
        }
    }while($getNote[$cont] != "");
?>