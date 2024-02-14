<?php

$nome = $_POST['nome'] ? $_POST['nome'] :'';
$oemissor = $_POST['oemissor'] ? $_POST['oemissor'] :'';
$ufdocumento = $_POST['ufdocumento'] ? $_POST['ufdocumento'] :'';
$dnascimento = $_POST['dnascimento'] ? $_POST['dnascimento'] :'';
$sexo = $_POST['sexo'] ? $_POST['sexo'] :'';
$email = $_POST['email'] ? $_POST['email'] :'';
$telefone = $_POST['telefone'] ? $_POST['telefone'] :'';
$nacionalidade = $_POST['nacionalidade'] ? $_POST['nacionalidade'] :'';
$ufaluno = $_POST['ufaluno'] ? $_POST['ufaluno'] :'';
$cidadealuno = $_POST['cidadealuno'] ? $_POST['cidadealuno'] :'';
$nomepai = $_POST['nomepai'] ? $_POST['nomepai'] :'';
$nomemae = $_POST['nomemae'] ? $_POST['nomemae'] :'';
$estadocivil = $_POST['estadocivil'] ? $_POST['estadocivil'] :'';
$deficiencia = $_POST['deficiencia'] ? $_POST['deficiencia'] :'';
$cep = $_POST['cep'] ? $_POST['cep'] :'';
$numerocasa = $_POST['numerocasa'] ? $_POST['numerocasa'] :'';
$complemento = $_POST['complemento'] ? $_POST['complemento'] :'';
$logradouro = $_POST['logradouro'] ? $_POST['logradouro'] :'';
$bairro = $_POST['bairro'] ? $_POST['bairro'] :'';
$ufendereco = $_POST['ufendereco'] ? $_POST['ufendereco'] :'';
$cidadeendereco = $_POST['cidadeendereco'] ? $_POST['cidadeendereco'] :'';
$escolaridade = $_POST['escolaridade'] ? $_POST['escolaridade'] :'';
$tinstituicao = $_POST['tinstituicao'] ? $_POST['tinstituicao'] :'';
$formacao = $_POST['formacao'] ? $_POST['formacao'] :'';
$curso = $_POST['curso'] ? $_POST['curso'] :'';

include_once('./conexao.php');

$sql = "UPDATE `dadosaluno` SET `nome`='$nome', `oemissor`='$oemissor',`ufdocumento`='$ufdocumento',`dnascimento`='$dnascimento',
`sexo`='$sexo',`email`='$email', `telefone`='$telefone',`nacionalidade`='$nacionalidade',`ufaluno`='$ufaluno',
`cidadealuno`='$cidadealuno',`nomemãe`='$nomemae',`nomepai`='$nomepai',`estadocivil`='$estadocivil',`deficiencia`='$deficiencia',
`cep`='$cep',`numero`='$numerocasa',`complemento`='$complemento',`logradouro`='$logradouro',`bairro`='$bairro',
`ufendereco`='$ufendereco',`cidadeendereco`='$cidadeendereco',`escolaridade`='$escolaridade',`tinstituicao`='$tinstituicao',
`formacao`='$formacao',`curso`='$curso' WHERE id =  1";
$result = mysqli_query($conn, $sql);


session_start();
$_SESSION['reload'] = true;
header("location: ../IndexPage/Pages/PaginaInicial/index.php")

?>