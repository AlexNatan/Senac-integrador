<?php

include_once("../php/conexao.php");


$sql = "SELECT * FROM dadosAluno WHERE id = 1";
$result = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($result);



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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
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
                            <a href="#" onclick="mudarPagina('./Pages/PaginaInicial/index.php', 0)">
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
                            <a href="#" onclick="mudarPagina('./Pages/PaginaPedencias/Pedencias.php', 5)">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                Pedências
                            </a>
                        </div>
                    </li>
                    <li class="abaLateral">
                        <div class="box">
                            <a href="https://bibliotecadigitalsenac.com.br/#/"
                                onclick="mudarPagina('./Pages/PaginaBibliotecaDigital/BibliotecaDigital.html', 6)" target="_blank">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                Biblioteca Digital
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="btn-group dropup contaINF" onclick="console.log('clicado') showModalP(true)">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo "$linha[nome]" ?>
                    </button>
                </div>
            </nav>
        </div>
    </header>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perfil do Aluno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modalCSS">
                        <div class="headerModal">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <p>
                                <?php echo "$linha[nome]" ?>
                            </p>
                        </div>
                        <div class="buttonModal">
                            <a href="#" onclick="mudarPagina('./Pages/PaginaDocumentos/documentos.php')" data-dismiss="modal">Documentos</a>
                            <a href="#" onclick="mudarPagina('./Pages/PaginaDadosPessoais/DadosPessoais.php')" data-dismiss="modal">Dados
                                pessoais</a>
                            <a href="../index.php">Sair da Conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe src="./Pages/PaginaInicial/index.php" frameborder="0" id="indexPagina"></iframe>
    <script src="indexPage.js"></script>
</body>

</html>