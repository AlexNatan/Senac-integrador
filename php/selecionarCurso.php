<?php
    $selectCurso = isset($_POST['selectCurso']) ? $_POST['selectCurso'] : '';

    session_start();
    if(isset($selectCurso)) {
        $_SESSION['cursoSelecionado'] = $selectCurso;
        echo $_SESSION['cursoSelecionado'];
        header('location: ../IndexPage/Pages/PaginaMeusCursos/meusCursos.php');
    }
?>