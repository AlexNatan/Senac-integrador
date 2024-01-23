<?php

session_start();

if(isset($_SESSION['DadosAluno'])) {
    if($_SESSION['DadosAluno'] == 'vazio') {
        unset($_SESSION['DadosAluno']);
        echo"<script>alert('Conta nao existe!')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <img src="../image/SenacSlideImg1.png" class="backgroundIMG">
    <div class="containerCSS">
        <div>
            <img src="../image/1024px-Senac_logo.svg.png" alt="">
        </div>
        <div>
            <h1>Área do Aluno</h1>
            <p>Seja bem vindo.</p>
            <p>Faça o login para ter acesso à sua conta.</p>
        </div>
        <form action="../php/Login.php" id="LoginForm" method="POST">
            <div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com"
                    required
                    >
                    <label for="floatingInput">Informe seu e-mail</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="name@example.com"
                    minlength="8"
                    required
                    >
                    <label for="floatingInput">Senha</label>
                  </div>
            </div>
            <div>
                <button onclick="enviarForm()">ENTRAR</button>
            </div>
        </form>
        <div class="link">
            <a href="">Esqueceu o email ou a senha?</a>
        </div>
    </div>

    <script src="sciptLogin.js"></script>
</body>
</html>