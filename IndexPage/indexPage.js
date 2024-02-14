function showModalP(isShow) {
    let modal = document.getElementById("modalPerfil");
    
    if(modal) {
        if(isShow) {
            modal.style.opacity = '1';
            modal.style.zIndex = '99';
        } else {
            modal.style.opacity = '0';
            modal.style.zIndex = '-99';
        }
    } else {
        console.log("nao tem modal")
    }
}

function mudarPagina(pagina, index) {
    let indexPagina = document.getElementById("indexPagina");
    let abasLaterais = document.querySelectorAll(".abaLateral");

    abasLaterais.forEach((item) => {
        item.classList.remove("selecionado")
    })

    if (index <= 6) {
        abasLaterais[index].classList.add("selecionado")
    } 

    indexPagina.src = pagina
    showModalP(false)
}

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })