<?php

include_once("../php/conexao.php");

session_start();
if (isset($_SESSION['DadosAluno'])) {
    if ($_SESSION['DadosAluno'] != 'vazio') {
        $linha = $_SESSION['DadosAluno'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexPage.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <div class="containercss">
            <div>
                <img src="./Pages/image/1024px-Senac_logo.svg.png" alt="">
                <h2>Portal - Aluno</h2>
            </div>
            <nav style="height: 100%; display:flex; flex-direction:column;justify-content: space-between;">
                <ul style="padding-left: 0;">
                    <li class="selecionado abaLateral">
                        <div class="box">
                            <a href="#" onclick="mudarPagina('./Pages/PaginaInicial/index.html', 0)">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Página Inicial
                            </a>
                        </div>
                    </li>
                    <li class="abaLateral">
                        <div class="box">
                            <a href="#" onclick="mudarPagina('./Pages/PaginaMeusCursos/meusCursos.php', 1)">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                Meus Cursos
                            </a>
                        </div>

                    </li>
                    <li class="abaLateral">
                        <div class="box">
                            <a href="#" onclick="mudarPagina('./Pages/PaginaQuadroDeHorarios/quadroDeHorarios.php', 2)">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                Quadro de Horários
                            </a>
                        </div>
                    </li>
                    <li class="abaLateral">
                        <div class="box">

                            <a href="#" onclick="mudarPagina('./Pages/PaginaFinanceiros/Financeiros.php', 3)">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                                Financeiro
                            </a>
                        </div>
                    </li>
                    <li class="abaLateral">
                        <div class="box">

                            <a href="#" onclick="mudarPagina('./Pages/PaginaMateriaisDeAula/MateriaisDeAula.html', 4)">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Materiais de Aula
                            </a>
                        </div>
                    </li>
                    <li class="abaLateral">
                        <div class="box">
                            <a href="#" onclick="mudarPagina('./Pages/PaginaPedencias/Pedencias.html', 5)">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                Pedências
                            </a>
                        </div>
                    </li>
                    <li class="abaLateral">
                        <div class="box">
                            <a href="#"
                                onclick="mudarPagina('./Pages/PaginaBibliotecaDigital/BibliotecaDigital.html', 6)">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                Biblioteca Digital
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="btn-group dropup contaINF">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo"$linha[nome]"?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" onclick="mudarPagina('./Pages/PaginaDocumentos/documentos.php', 6)">Documentos</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><a class="dropdown-item" href="#">Sair da conta</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <iframe src="./Pages/PaginaInicial/index.html" frameborder="0" id="indexPagina"></iframe>

    <script src="indexPage.js"></script>
</body>

</html>