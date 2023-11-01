<?php
include("conexao.php");
include("classes.php");

$id = $_POST['id'];
$tipo = $_POST['tipo'];
$ticket = $_POST['ticket'];
$relacionado = $_POST['relacionado'];
$st_azure = $_POST['st_azure'];
$descricao = $_POST['descricao'];
$CCC = $_POST['ccc'];
$resp_ericsson = $_POST['resp_ericsson'];
$ult_atualizacao = $_POST['ult_atualizacao'];

//<- TESTE DE VARIAVEL Inicio
//echo "$tipo";
//echo "$ticket";
//echo "$relacionado";
//echo "$dt_criacao";
//echo "$data_inserida";
//echo "$data_formatada";
//echo "$data_formatada_br";
//echo "$st_azure";
//echo "$descricao";
//echo "$CCC";
//echo "$resp_ericsson";
//echo "$ult_atualizacao";
//<- TESTE DE VARIAVEL fim

alteraChamado($conexao, $id, $tipo, $ticket, $relacionado, $st_azure, $descricao, $CCC, $resp_ericsson, $ult_atualizacao);
header("Location:chamados.php");

?>
