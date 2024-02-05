<?php
    $selectHorario = isset($_POST['selectHorario']) ? $_POST['selectHorario'] : '';

    session_start();
    if(isset($selectHorario)) {
        $_SESSION['selectHorario'] = $selectHorario;
        header('location: ../IndexPage/Pages/PaginaQuadroDeHorarios/quadroDeHorarios.php');
    }
?>