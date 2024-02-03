<?php

include_once('../../../php/conexao.php');
$sql = "SELECT * FROM cursos";
$result = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meusCursos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <title>Meus Cursos</title>
</head>

<body>
    <main>
        <section>
            <header>
                <h1>Meus Cursos</h1>
                <div class="dropdown">
                </div>
            </header>
            <hr>
            <div>
                <form action="../../../php/selecionarCurso.php" method="POST" id="cursoForm">

                    <select class="form-select form-select-lg mb-3" onchange="selecionarCurso()"
                        aria-label="Large select example" name="selectCurso" id="selectCurso">
                        <option selected value="0">Escolha o curso</option>

                        <?php
                        $sql = "SELECT * FROM cursos";
                        $result = mysqli_query($conn, $sql);

                        while ($linha = mysqli_fetch_array($result)) {
                            echo "<option value='$linha[id]'>$linha[nome]</option>";
                        }
                        ?>

                    </select>

                </form>
            </div>
            <div class="" id="tableCurso">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Turma</th>
                            <th scope="col">Curso</th>
                            <th scope="col">U.C.</th>
                            <th scope="col">Período</th>
                            <th scope="col">Presença</th>
                            <th scope="col">Situação</th>
                        </tr>
                    </thead>
                    <?php

                    session_start();
                    $idCurso = isset($_SESSION['cursoSelecionado']) ? $_SESSION['cursoSelecionado']:'';
                    include_once('../../../php/conexao.php');
                    $sql = "SELECT * FROM cursos WHERE id = $idCurso";
                    $result = mysqli_query($conn, $sql);
                    $linha = mysqli_fetch_array($result);
                    
                    echo"
                    <tr>
                        <th class'col'>$linha[1]</th>
                        <th class'col'>$linha[2]</th>
                        <th class'col'>$linha[3]</th>
                        <th class'col'>$linha[1]</th>
                        <th class'col'>$linha[8]</th>
                        <th class'col'>$linha[9]</th>
                    </tr>
                    ";

                    ?>
                </table>
            </div>
        </section>
    </main>

    <script src="meusCursos.js"></script>
</body>

</html>