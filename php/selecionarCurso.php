<?php
    $selectCurso = isset($_POST['selectCurso']) ? $_POST['selectCurso'] : '';

    session_start();
    if(isset($selectCurso)) {
        if($selectCurso != 0) {
            $_SESSION['cursoSelecionado'] = $selectCurso;
            header('location: ../IndexPage/Pages/PaginaMeusCursos/meusCursos.php');
        }
    }
?>