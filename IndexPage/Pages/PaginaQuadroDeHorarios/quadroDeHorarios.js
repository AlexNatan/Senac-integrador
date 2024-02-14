function selecionarHorario() {
    let horarioSelecionado = document.getElementById("selectHorario").value;
    let tabelaHorario = document.getElementById("tableHorarios");
    let horarioForm = document.getElementById("horarioForm")

    if (horarioSelecionado != 0) {
        tabelaHorario.style.opacity = "1"
    } else {
        tabelaHorario.style.opacity = "0"
    }

    horarioForm.submit()
}
