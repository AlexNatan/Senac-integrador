function selecionarCurso() {
    let cursoSelecionado = document.getElementById("selectCurso").value;
    let tabelaCurso = document.getElementById("tableCurso");
    let cursoForm = document.getElementById("cursoForm")

    if (cursoSelecionado != 0) {
        tabelaCurso.style.opacity = "1"
    } else {
        tabelaCurso.style.opacity = "0"
    }

    cursoForm.submit()
}

