function setVisible_true() {
    document.getElementById('panel_addNote').style.visibility = 'visible';
    validateDate();
}

function setVisible_false() {
    document.getElementById('panel_addNote').style.visibility = 'collapse';
}

function validateDate(){
    var docTitle = document.getElementById("tituloNote");
    var docCont = document.getElementById("conteudo");
    var docEnviar = document.getElementById("enviarNote");
    var docAlert = document.getElementById("aviso");

    if((docCont.value == "")||(docTitle.value == "")){
        docAlert.innerText="Preencha todos os campos*";
        docEnviar.disabled = true;
    }else{
        docAlert.innerText="";
        docEnviar.disabled = false;
    }
}