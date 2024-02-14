<?php

include_once('../php/conexao.php');
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
    <header>
        <div class="containercss">
            <div>
                <img src="../image/1024px-Senac_logo.svg.png" alt="">
                <h2 class="text-colored">Portal - Aluno</h2>

            </div>
            <nav>
                <ul>
                    <li>
                        <div class="box ">
                            <a href="#">
                                <i class="fa fa-home" aria-hidden="true"></i>Página Inicial
                            </a>
                        </div>
                    </li>

                    <li class="selecionado">
                        <div class="box">
                            <a href="#">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>

                                Meus Cursos
                            </a>
                        </div>

                    </li>

                    <li>
                        <div class="box">
                            <a href="#">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                Quadro de Horários
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="box">

                            <a href="#">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                                Financeiro
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="box">

                            <a href="#">
                                <i class="fa fa-book" aria-hidden="true"></i>

                                Materiais de Aula
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="box">

                            <a href="#">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>

                                Pedências
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="box">
                            <a href="#">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                Biblioteca Digital
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="box">
                            <a href="../PaginaLogin/login.php">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                Entrar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section>
            <header>
                <h1>Página Inicial</h1>
                <div class="dropdown">
                    <a href="../PaginaLogin/login.php">
                        <button class="btn btn-secondary"
                            style="background-color: #659ae4; border: none; font-family: opens-sans, sans-serif;"
                            type="button">
                            Faça o Login
                        </button>
                    </a>
                </div>
            </header>
            <hr>
            <div>
                <select class="form-select form-select-lg mb-3" onchange="selecionarCurso()" aria-label="Large select example" id="selectCurso">
                    <option selected value="0">Open this select menu</option>
                    <?php
                    
                    for($i = 0; $i <= 5; $i++) {
                        echo "<option value='$linha[id]'>$linha[nome]</option>";
                    }
                    
                    ?>
                </select>
            </div>
            <div class="hide" id="tableCurso">
                <table class="table" >
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
                </table>
            </div>
        </section>
    </main>

    <script src="meusCursos.js"></script>
</body>

</html>