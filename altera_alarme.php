<?php
include("conexao.php");
include("classes.php");

$id = $_POST['id'];
$server = $_POST['server'];
$alarme = $_POST['alarme'];
$resolucao = $_POST['resolucao'];

alteraAlarme($conexao, $id, $server, $alarme, $resolucao);
header("Location:tratamentos.php");

?>
