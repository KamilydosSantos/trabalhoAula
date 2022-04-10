<?php
    $cont = 0;
    do{
        $cont++;
        $sql = "SELECT conteudo, titulo FROM user_notes WHERE user_note = '$_SESSION[id]-$cont'";
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
                    <a>Excuir</a>     
                    <a>Editar</a>  
                </div>
            </div>
<?php
        }
    }while($getNote[$cont] != "");
?>