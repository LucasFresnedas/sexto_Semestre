<?php
include('conexao.php');

//COMEÇO CÓDIGOS SQL PARA USUARIOS PADRÃO

//LOGIN_PRINCIPAL
function buscaUsuario($conexao,$login,$senha){
$sql="select * from usuarios where usuario='$login' and senha='$senha'";//Instrução sql
$resultado=mysqli_query($conexao,$sql);//realiza a consulta
return mysqli_fetch_assoc($resultado);//retornar os valores
}

//LOGIN_ADM
function buscaUsuarioADM($conexao,$login,$senha){
$sql="select * from usuario_adm where usuario='$login' and senha='$senha'";
$resultado=mysqli_query($conexao,$sql);
return mysqli_fetch_assoc($resultado);
}

//LISTA USUARIO NO index_admin
function listaUsuario($conexao){
    $agendas=array();
    $sql="select * from usuarios";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

//APAGA USUARIO NO index_admin
function excluirUsuarioADM($conexao,$codigo){
    $sql="delete from usuarios where id='$codigo'";
    return mysqli_query($conexao,$sql);
}

//INSERE USUARIO PADRÃO
function insereUsuarioADM($conexao, $usuario, $senha){
    $sql="insert into usuarios(usuario, senha) values('$usuario','$senha')";
    return mysqli_query($conexao,$sql);
}

//ALTERAR USUARIO PADRÃO
function alteraUsuarioADM($conexao, $id, $usuario, $senha){
    $sql="update usuarios set usuario ='$usuario', senha ='$senha' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

//UPDATE USUÁRIO PADRÃO
function buscaUsuarioAlterar($conexao,$id){
    $sql="select * from usuarios where id = '$id'";
    $resultado=mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

//FIM CÓDIGOS SQL PARA USUARIOS PADRÃO --------------------------------------------------------------------------------------------------------------------------

//COMEÇO CÓDIGOS SQL PARA TRATAMENTO

//INSERE TRATAMENTOS
function insereTratamento($conexao, $server, $alarme, $resolucao){
    $sql="insert into alarmes(server, alarme, resolucao) values('$server', '$alarme','$resolucao')";
    return mysqli_query($conexao,$sql);
}

//LISTA TRATAMENTOS
function listaAlarme($conexao){
    $agendas=array();
    $sql="select * from alarmes";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

//APAGA ALARME
function excluirAlarme($conexao,$codigo){
    $sql="delete from alarmes where id='$codigo'";
    return mysqli_query($conexao,$sql);
}

//BUSCA DADOS FILTRADOS
function buscaAlarmeAlterar($conexao,$id){
    $sql="select * from alarmes where id = '$id'";
    $resultado=mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}

//ALTERAR ALARME
function alteraAlarme($conexao, $id, $server, $alarme, $resolucao){
    $sql="update alarmes set server = '$server', alarme ='$alarme', resolucao ='$resolucao' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

//FIM CÓDIGOS SQL PARA ALARMES --------------------------------------------------------------------------------------------------------------------------


//COMEÇO CÓDIGOS SQL PARA CHAMADOS --------------------------------------------------------------------------------------------------------------------------

function listaChamadosAvaliacao($conexao){
    $agendas=array();
    $sql="select * from chamados where caso = 'Avaliação' order by STR_TO_DATE(dt_criacao, '%d/%m/%Y') DESC;";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

function listaChamadosConcluido($conexao){
    $agendas=array();
    $sql="select * from chamados where caso = 'Concluido' ORDER BY STR_TO_DATE(dt_fechamento, '%d/%m/%Y %H:%i') DESC";
    $resultado=mysqli_query($conexao,$sql);
    while($agenda=mysqli_fetch_assoc($resultado)){
    array_push($agendas,$agenda);
    }
    return $agendas;
}

function ConcluiChamado($conexao, $dt_fechamento, $fechado, $id){
    $sql="update chamados set caso ='Concluido', dt_fechamento = '$dt_fechamento', fechado = '$fechado' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

function reabreChamado($conexao, $id){
    $sql="update chamados set caso ='Avaliação' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

function insereTicket($conexao, $tipo, $ticket, $relacionado, $dt_criacao, $st_azure, $descricao, $CCC, $resp_ericsson, $ult_atualizacao){
    $sql="insert into chamados(tipo, ticket, relacionado, dt_criacao, dt_fechamento, st_azure, descricao, CCC, resp_ericsson, ult_atualizacao, caso, fechado) values('$tipo','$ticket', '$relacionado', '$dt_criacao', 'NULO', '$st_azure', '$descricao', '$CCC', '$resp_ericsson', '$ult_atualizacao', 'Avaliação', 'NULO')";
    return mysqli_query($conexao,$sql);
}

function apagaChamado($conexao,$codigo){
    $sql="delete from chamados where id='$codigo'";
    return mysqli_query($conexao,$sql);
}

function alteraChamado($conexao, $id, $tipo, $ticket, $relacionado, $st_azure, $descricao, $CCC, $resp_ericsson, $ult_atualizacao){
    $sql="update chamados set tipo = '$tipo', ticket ='$ticket', relacionado ='$relacionado', st_azure ='$st_azure', descricao ='$descricao', CCC ='$CCC', resp_ericsson ='$resp_ericsson', ult_atualizacao ='$ult_atualizacao' where id ='$id'";
    return mysqli_query($conexao,$sql);
}

function buscaChamadoAlterar($conexao,$id){
    $sql="select * from chamados where id = '$id'";
    $resultado=mysqli_query($conexao,$sql);
    return mysqli_fetch_assoc($resultado);
}
