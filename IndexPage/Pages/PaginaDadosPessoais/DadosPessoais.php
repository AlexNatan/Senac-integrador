<?php

include_once("../../../PHP/conexao.php");

$sql = "SELECT * FROM dadosaluno WHERE id = 1";
$result = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($result);


session_start();
if (isset($_SESSION['alterou'])) {
    if ($_SESSION['alterou']) {
        echo '<script>alert("Senha Alterada com sucesso!");</script>';
    } else {
        echo '<script>alert("Senhas não são iguais!");</script>';
    }
    unset($_SESSION['alterou']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="DadosPessoais.css">

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
    <div>
        <h1>Dados Pessoais</h1>
    </div>
    <hr>
    <form action="../../../php/aletrarDados.php" method="POST">
        <div>
            <div>
                <label for="">Nome::</label>
                <input type="text" <?php echo "value=$linha[nome]" ?> name="nome" required>
            </div>
            <div>
                <label for="">CPF:</label>
                <input type="text" <?php echo "value=$linha[cpf]" ?> disabled>
            </div>
            <div>
                <label for="">nome:</label>
                <input type="text" <?php echo "value=$linha[oemissor]" ?> name="oemissor" required>
            </div>
            <div>
                <label for="">nome:</label>
                <input type="text" <?php echo "value=$linha[ufdocumento]" ?> name="ufdocumento" required>
            </div>
            <div>
                <label for="">Data de nascimento:</label>
                <input type="text" <?php echo "value=$linha[dnascimento]" ?> name="dnascimento" required>
            </div>
            <div>
                <label for="">Sexo:</label>
                <input type="text" <?php echo "value=$linha[sexo]" ?> name="sexo" required>
            </div>
            <div>
                <label for="">Email:</label>
                <input type="text" <?php echo "value=$linha[email]" ?> name="email" required>
            </div>
            <div>
                <label for="">Senha:</label>
                <input type="password" <?php echo "value=$linha[senha]" ?> disabled>
                <button type="button" class="btnSenha" data-toggle="modal" data-target="#exampleModal"
                    style="border-radius: 3px; margin-top: .3em; padding: .2em .6em; color: black;">
                    Alterar Senha
                </button>
            </div>
            <div>
                <label for="">Telefone:</label>
                <input type="text" <?php echo "value=$linha[telefone]" ?> name="telefone" required>
            </div>
            <div>
                <label for="">Nacionalidade:</label>
                <input type="text" <?php echo "value=$linha[nacionalidade]" ?> name="nacionalidade" required>
            </div>
            <div>
                <label for="">nome:</label>
                <input type="text" <?php echo "value=$linha[ufaluno]" ?> name="ufaluno" required>
            </div>
            <div>
                <label for="">Cidade:</label>
                <input type="text" <?php echo "value=$linha[cidadealuno]" ?> name="cidadealuno" required>
            </div>
            <div>
                <label for="">Nome da mãe:</label>
                <input type="text" <?php echo "value=$linha[nomemãe]" ?> name="nomemae" required>
            </div>
            <div>
                <label for="">Nome do pai:</label>
                <input type="text" <?php echo "value=$linha[nomepai]" ?> name="nomepai" required>
            </div>
            <div>
                <label for="">Estado civil:</label>
                <input type="text" <?php echo "value=$linha[estadocivil]" ?> name="estadocivil" required>
            </div>
            <div>
                <label for="">Deficiente:</label>
                <input type="text" <?php echo "value=$linha[deficiencia]" ?> name="deficiencia" required>
            </div>
            <div>
                <label for="">CEP:</label>
                <input type="text" <?php echo "value=$linha[cep]" ?> name="cep" required>
            </div>
            <div>
                <label for="">Numero da casa:</label>
                <input type="text" <?php echo "value=$linha[numero]" ?> name="numerocasa" required>
            </div>
            <div>
                <label for="">Compelemento:</label>
                <input type="text" <?php echo "value=$linha[complemento]" ?> name="complemento" required>
            </div>
            <div>
                <label for="">Logradouro:</label>
                <input type="text" <?php echo "value=$linha[logradouro]" ?> name="logradouro" required>
            </div>
            <div>
                <label for="">Bairro:</label>
                <input type="text" <?php echo "value=$linha[bairro]" ?> name="bairro" required>
            </div>
            <div>
                <label for="">nome:</label>
                <input type="text" <?php echo "value=$linha[ufendereco]" ?> name="ufendereco" required>
            </div>
            <div>
                <label for="">Endereço:</label>
                <input type="text" <?php echo "value=$linha[cidadeendereco]" ?> name="cidadeendereco" required>
            </div>
            <div>
                <label for="">Escolaridade:</label>
                <input type="text" <?php echo "value=$linha[escolaridade]" ?> name="escolaridade" required>
            </div>
            <div>
                <label for="">Instituição:</label>
                <input type="text" <?php echo "value=$linha[tinstituicao]" ?> name="tinstituicao" required>
            </div>
            <div>
                <label for="">Formação:</label>
                <input type="text" <?php echo "value=$linha[formacao]" ?> name="formacao" required>
            </div>
            <div>
                <label for="">Curso:</label>
                <input type="text" <?php echo "value=$linha[curso]" ?> name="curso" required>
            </div>
        </div>
        <div class="buttonContent">
            <input type="submit" value="Alterar Dados">
        </div>
    </form>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="../../../php/alterarSenha.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title">Alterar Senha</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label for="">Digite sua senha antiga:</label>
                            <input type="password" name="senhaAntiga" required>
                        </div>
                        <div>
                            <label for="">Digite sua senha nova:</label>
                            <input type="password" name="senhaNova" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Alterar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>