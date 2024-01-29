function selecionarCurso() {
    let cursoSelecionado = document.getElementById("selectCurso");
    let tabelaCurso = document.getElementById("tableCurso");

    if(cursoSelecionado.value != 0) {
        tabelaCurso.style.opacity = "1"
    }  else {
        tabelaCurso.style.opacity = "0"
    }
}