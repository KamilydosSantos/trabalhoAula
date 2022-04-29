<?php
    $cont = 0;
    
    //verifica se há categoria especifica e reduz scopo da busca
    if(isset($_POST['panelCategoria'])){
        $categoria = $_POST['panelCategoria'];
        $getNumRows = mysqli_num_rows(mysqli_query($connect, 'SELECT `user_id` FROM `user_notes` WHERE `user_id`="'.$_SESSION['id'].'" AND `categoria` = "'.$categoria.'"'));
    }else{
        $getNumRows = mysqli_num_rows(mysqli_query($connect, 'SELECT `user_id` FROM `user_notes` WHERE `user_id`="'.$_SESSION['id'].'"'));
    }
    for($i = 0; $i<$getNumRows; $i++){
        do{
            $cont++;
            
            //Seleciona categoria
            if(isset($_POST['panelCategoria'])){
                $categoria = $_POST['panelCategoria'];
                $sql = "SELECT conteudo, titulo, user_note, categoria FROM user_notes WHERE user_note = '$_SESSION[id]-$cont' AND `categoria` = '$categoria'";
            }else{
                $sql = "SELECT conteudo, titulo, user_note, categoria FROM user_notes WHERE user_note = '$_SESSION[id]-$cont'";
            }

            $getNote[$cont] = mysqli_fetch_array(mysqli_query($GLOBALS["connect"], $sql));
            
            if($getNote[$cont] != ""){
?>
                <div class="box">
                    <div class="CategoryTag">
                        <p class="CategoryBox" id="<?=$getNote[$cont]['user_note'] . 'categoria'  ?>">
                            <?=  $getNote[$cont]['categoria'] ?>
                        </p>
                    </div>
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
                        <a href="../nav/editNote.php?nota=<?= $getNote[$cont]['user_note']?>"> 
                            <div class="btnEditar" id='btnAlterar'>EDITAR</div> 
                        </a>
                    </form>
                    </div>
                </div>
<?php
            }
        }while(($getNote[$cont] == "") && ($i < $getNumRows));
    }
?>