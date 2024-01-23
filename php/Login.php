<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

include_once('./conexao.php');

$sql = "SELECT * FROM dadosaluno WHERE email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($conn, $sql);
$linha = mysqli_fetch_assoc($resultado);

session_start();
if($linha) {
    $_SESSION['DadosAluno'] = $linha;
    header("location: ../paginaInicial/contaLogada.php");
} else if ($linha == "") {
    $_SESSION['DadosAluno'] = 'vazio';
    header("location: ../paginaLogin/login.php");
}

?>