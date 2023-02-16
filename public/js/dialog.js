function abrirDialogCriar(){
    dialogCriar = $('#dialogCriar');
    dialogCriar[0].showModal()
}

function fecharDialogCriar(){
    dialogCriar = $('#dialogCriar');
    dialogCriar[0].close()
}

function abrirDialogEditar(element){
    var elements = $(element).find(':input');
    var infos = {};
    for (var i = 0; i < elements.length; i++) {
        infos[elements[i].id] = elements[i].value;
    }
    infosElement = JSON.stringify(infos);
    $("#infosEditar").val(infosElement);
    dialogEditar = $('#dialogEditar');
    dialogEditar[0].showModal()
    getInfosEditar()
}

function fecharDialogEditar(){
    dialogEditar = $('#dialogEditar');
    dialogEditar[0].close()
}

function abrirDialogDeletar(element){
    var elements = $(element).find(':input');
    var infos = {};
    for (var i = 0; i < elements.length; i++) {
        infos[elements[i].id] = elements[i].value;
    }
    infosElement = JSON.stringify(infos);
    $("#infosDeletar").val(infosElement);
    dialogDeletar = $('#dialogDeletar');
    dialogDeletar[0].showModal()
    getInfosDeletar()
}

function fecharDialogDeletar(){
    dialogDeletar = $('#dialogDeletar');
    dialogDeletar[0].close()
}