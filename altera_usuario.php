<?php
include("conexao.php");
include("classes.php");

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

alteraUsuarioADM($conexao, $id, $usuario, $senha);
header("Location:index_admin.php");

?>
