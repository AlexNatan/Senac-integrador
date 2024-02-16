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
                <h1 class="text-colored"style="color: #004a8d;">Meus Cursos</h1>
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
            <div class="cardCurso" id="tableCurso">
                <?php
                session_start();
                $idCurso = isset($_SESSION['cursoSelecionado']) ? $_SESSION['cursoSelecionado'] : '';
                $sqlCS = "SELECT * FROM cursos WHERE id = $idCurso";
                $resultCS = mysqli_query($conn, $sqlCS);
                $linhaCS = mysqli_fetch_array($resultCS);

                $statusAluno;

                if ("$linhaCS[situacao]" == "cursando") {
                    $statusAluno = "cursando";
                } else {
                    $statusAluno = "finalizou";
                }
                ?>

                <div class='cardCurso'>
                    <div class='cardCursoTitle'>
                        <h1>
                            <?php echo "$linhaCS[nome]" ?>
                        </h1>
                        <p class=<?php echo"$statusAluno"?>><?php echo "$linhaCS[situacao]" ?></p>
                    </div>
                    <hr>
                    <div class='cardCursoDescription'>
                        <div class='cardCursoCH'>
                            <h3>Carga Horária</h3>
                            <p>
                                <?php echo "$linhaCS[cargahoraria]" ?> HORAS
                            </p>
                        </div>
                        <div class='cardCursoHorarios'>
                            <h3>Horarios</h3>
                            <div class='cardCursoHorariosES'>
                                <div>
                                    <h4>Entada</h4>
                                    <div>
                                        <h5>Dia:</h5>
                                        <p>
                                            <?php echo "$linhaCS[dentrada]" ?>
                                        </p>
                                    </div>
                                    <div>
                                        <h5>Hora:</h5>
                                        <p>
                                            <?php echo "$linhaCS[hentrada]" ?>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <h4>Saída</h4>
                                    <div>
                                        <h5>Dia:</h5>
                                        <p>
                                            <?php echo "$linhaCS[dsaida]" ?>
                                        </p>
                                    </div>
                                    <div>
                                        <h5>Hora:</h5>
                                        <p>
                                            <?php echo "$linhaCS[hsaida]" ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </table>
            </div>
        </section>
    </main>

    <script src="meusCursos.js"></script>
</body>

</html>