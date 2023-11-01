<?php
include("conexao.php");
include("classes.php");
$codigo=$_POST['id'];

//echo "$codigo"; <- TESTE DE VARIAVEL 

excluirAlarme($conexao,$codigo);
header("Location:tratamentos.php");
?>
