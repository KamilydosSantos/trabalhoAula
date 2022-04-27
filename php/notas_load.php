<?php
    $cont = 0;
    $getNumRows = mysqli_num_rows(mysqli_query($connect, 'SELECT `user_id` FROM `user_notes` WHERE `user_id`="'.$_SESSION['id'].'"'));
    for($i = 0; $i<$getNumRows; $i++){
        do{
            $cont++;
            $sql = "SELECT conteudo, titulo, user_note, categoria FROM user_notes WHERE user_note = '$_SESSION[id]-$cont'";
            $getNote[$cont] = mysqli_fetch_array(mysqli_query($GLOBALS["connect"], $sql));
            if($getNote[$cont] != ""){
?>
                <div class="box">
                    <p class="CategoryBox" id="<?=$getNote[$cont]['user_note'] . 'categoria'  ?>">
                        <?=  $getNote[$cont]['categoria'] ?>
                    </p>
                    <p class="TitleBox" id="<?=$getNote[$cont]['user_note'] . 'titulo'  ?>">
                        <?=  $getNote[$cont]['titulo'] ?>
                    </p>
                    <p class="TextBox" id="<?=$getNote[$cont]['user_note'] . 'conteudo'  ?>">
                        <?=  $getNote[$cont]['conteudo'] ?>
                    </p>
                    <div class="buttons">
                    <form id="btCtrlNotas" method="post" action="">
                        <a href="../php/notas_deletar.php?nota=<?= $getNote[$cont]['user_note']?>">   
                        <div class="btnExcluir" type="submit" id='btnApagar' onclick="Excluir()">EXCLUIR</div> 
                        </a>
                        <a>
                            <div class="btnEditar" type="submit" id='btnAlterar' onclick="setVisible_true()" id="setVisible-editNote">EDITAR</div> 
                        </a>
                    </form>
                    </div>
                </div>
<?php
            }
        }while(($getNote[$cont] == "") && ($i < $getNumRows));
    }
?>