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
}