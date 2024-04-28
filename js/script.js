let count = 1;
document.getElementById("radio1").checked = true;

setInterval(() => {
    nextImage();
}, 2000);

function nextImage() {
    count++;
    if(count>3){
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;
}


function gravar() {

    let form = $("#formCentroCusto")[0];
    let formData = new FormData(form);

    gravarCentroCusto(formData, function(data) {
        //Verifica se a função de gravar os campos foi executada corretamente
        smartAlert("Sucesso", "Operação realizada com sucesso!", "success");
        //voltar();
    })
}