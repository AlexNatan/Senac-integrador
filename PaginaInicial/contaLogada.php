<?php

include_once("../php/conexao.php");

session_start();
if(isset($_SESSION['DadosAluno'])) {
    if($_SESSION['DadosAluno'] != 'vazio') {
        $linha = $_SESSION['DadosAluno'];
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac - Portal Aluno</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


</head>

<body>
    <header>
        <div class="containercss">
            <div>
                <img src="../image/1024px-Senac_logo.svg.png" alt="">
                <h2>Portal - Aluno</h2>

            </div>
            <nav>
                <ul>
                    <li class="selecionado">
                        <div class="box ">
                            <a href="#">
                                <i class="fa fa-home" aria-hidden="true"></i>Página Inicial
                            </a>
                        </div>
                    </li>

                    <li>
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
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section>
            <header>
                <h1>Página Inicial</h1>
                <div class="dropdown">
                    <button class="btn btn-secondary" style="background-color: #659ae4; border: none; font-family: opens-sans, sans-serif;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo"$linha[nome]"?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Alterar senha</a></li>
                        <li><a class="dropdown-item" href="#">Documentos</a></li>
                        <li><a class="dropdown-item" href="#">Dados Cadastrais</a></li>
                        <li><a class="dropdown-item" href="../php/sairDaConta.php">Sair</a></li>
                    </ul>
                </div>
            </header>
            <hr>
           <div class="carouselCSS">
                <h2>Avisos</h2>
                <div id="autoplay">
                    <div>
                        <img class="d-block w-100" src="../image/1024px-Senac_logo.svg.png" alt="First slide">
                    </div>
                    <div>

                        <img class="d-block w-100" src="../image/SenacSlideImg1.png" alt="First slide">
                    </div>
                    <div>

                        <img class="d-block w-100" src="../image/Icons/javascript.png" alt="First slide">
                    </div>
                

                </div>
            </div>
            <hr>
            <div>
                <h2>Cursos</h2>
                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <div class="card" style="width: 18rem; flex: 1 1 300px">
                            <img src="../image/Icons/javascript.png" class="card-img-top" alt="Logo Javascript" style="height: 12em; object-fit: cover;">
                            <div class="card-body">
                            <h5 class="card-title">Curso de JavaScript</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary" style="width: 100%;">Se inscrever</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; flex: 1 1 300px">
                            <img src="../image/Icons/javascript.png" class="card-img-top " alt="Logo Javascript" style="height: 12em; object-fit: cover;">
                            <div class="card-body">
                            <h5 class="card-title">Curso de JavaScript</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary" style="width: 100%;">Se inscrever</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; flex: 1 1 300px">
                            <img src="../image/Icons/javascript.png" class="card-img-top " alt="Logo Javascript" style="height: 12em; object-fit: cover;">
                            <div class="card-body">
                            <h5 class="card-title">Curso de JavaScript</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary" style="width: 100%;">Se inscrever</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; flex: 1 1 300px">
                            <img src="../image/Icons/javascript.png" class="card-img-top " alt="Logo Javascript" style="height: 12em; object-fit: cover;">
                            <div class="card-body">
                            <h5 class="card-title">Curso de JavaScript</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary" style="width: 100%;">Se inscrever</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; flex: 1 1 300px">
                            <img src="../image/Icons/javascript.png" class="card-img-top " alt="Logo Javascript" style="height: 12em; object-fit: cover;">
                            <div class="card-body">
                            <h5 class="card-title">Curso de JavaScript</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary" style="width: 100%;">Se inscrever</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; flex: 1 1 300px">
                            <img src="../image/Icons/javascript.png" class="card-img-top " alt="Logo Javascript" style="height: 12em; object-fit: cover;">
                            <div class="card-body">
                            <h5 class="card-title">Curso de JavaScript</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary" style="width: 100%;">Se inscrever</a>
                            </div>
                        </div>
                    </div>
        </section>
    </main>

    <script src="script.js" type="text/javascript"> </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
          $(document).ready(function(){
    $('#autoplay').slick({
        dots: true,
        infinite: true,
        speed: 300,
        autoplaySpeed: 2000,
        slidesToShow: 1,
    });
  });
    </script>
</body>

</html>