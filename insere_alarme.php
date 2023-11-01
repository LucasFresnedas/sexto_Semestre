<?php
include("conexao.php");
include("classes.php");

$server = $_POST['server'];
$alarme = $_POST['alarme'];
$resolucao = $_POST['resolucao'];

//echo "$resolucao"; <- TESTE DE VARIAVEL
//echo "$alarme"; <- TESTE DE VARIAVEL

insereTratamento($conexao, $server, $alarme, $resolucao);
header("Location:tratamentos.php");

?>
