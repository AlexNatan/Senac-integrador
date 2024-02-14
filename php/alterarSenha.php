<?php

include_once("conexao.php");

$antigaSenha = $_POST['senhaAntiga'];
$novaSenha = $_POST['senhaNova'];

$SQL = "SELECT * FROM `dadosaluno` WHERE id = 1";
$result = mysqli_query($conn, $SQL);
$linha = mysqli_fetch_array($result);

$sqlSenha = "$linha[senha]";


session_start();
if ($sqlSenha === $antigaSenha) {
    $SQLAltSenha = "UPDATE `dadosaluno` SET `senha`='$novaSenha' WHERE id = 1";
    $result = mysqli_query($conn, $SQLAltSenha);
    $_SESSION['alterou'] = true;
    header("location: ../IndexPage/Pages/PaginaDadosPessoais/DadosPessoais.php");
    exit();
} else {
    $_SESSION['alterou'] = false;
    header("location: ../IndexPage/Pages/PaginaDadosPessoais/DadosPessoais.php");
    exit(); 
}
?>