<?php
include("conexao.php");
include("classes.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

insereUsuarioADM($conexao, $usuario, $senha);
header("Location:index_admin.php");

?>
