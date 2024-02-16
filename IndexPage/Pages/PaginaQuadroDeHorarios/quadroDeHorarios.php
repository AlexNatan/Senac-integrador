<?php

include_once('../../../php/conexao.php');
$sql = "SELECT * FROM quadrodehorarios";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac - Portal Aluno</title>
    <link rel="stylesheet" href="quadroDeHorarios.css">
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


</head>

<body>
    <main>
        <section>
            <header>
                <h1 class="" style="color: #004a8d;">Quadro De Horarios</h1>
                <div class="dropdown">
                </div>
            </header>
            <hr>

            <form action="../../../php/selecionarHorario.php" method="POST" id="horarioForm">

                    <select class="form-select form-select-lg mb-3" onchange="selecionarHorario()"
                        aria-label="Large select example" name="selectHorario id="selectHorario>
                        <option selected value="0">Escolha o horario</option>

                        <?php
                        $sql = "SELECT * FROM quadrodehorarios";
                        $result = mysqli_query($conn, $sql);

                        if($linha) {
                            while ($linha = mysqli_fetch_array($result)) {
                                echo "<option value='$linha[id]'>$linha[UC]</option>";
                            }
                        }
                        ?>

                    </select>

                </form>
        </section>
        <table class="table ms-2 col-1 text-center" id="tableHorarios">
            <thead>
                <tr>
                    <th scope="col">Horário</th>
                    <th scope="col">Unidade Curricular</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Docente</th>
                    <th scope="col">Local</th>
                </tr>
            </thead>
            <?php

                    session_start();
                    $sql = "SELECT * FROM quadrodehorarios";
                    $result = mysqli_query($conn, $sql);
                    $linha = mysqli_fetch_array($result);
                    
                    if($linha) {
                        echo"
                    <tr>
                        <th class'col'>$linha[1]</th>
                        <th class'col'>$linha[2]</th>
                        <th class'col'>$linha[3]</th>
                        <th class'col'>$linha[4]</th>
                        <th class'col'>$linha[5]</th>
                    </tr>
                    ";
                    }

                    ?>
        </table>
    </main>
    <script src="quadroDeHorarios.js"></script>
</body>