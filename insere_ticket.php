<?php
require_once __DIR__ . '/vendor/autoload.php';
include("conexao.php");
include("classes.php");

use Telegram\Bot\Api;

$tipo = $_POST['tipo'];
$ticket = $_POST['ticket'];
$relacionado = $_POST['relacionado'];

//Conversão de datas
$data_inserida = $_POST['dt_criacao']; //<---Recebe a data do formulario no formato 2023-03-16
$data_formatada = DateTime::createFromFormat('Y-m-d', $data_inserida); //<---Converte a data para DateTime
$data_formatada_br = $data_formatada->format('d/m/Y'); //<---deixa a data no padrão brasileiro
$dt_criacao = $data_formatada_br; //<---Atribui a data no padrão brasileiro para o campo que vai ao banco de dados
//Fim conversão

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
try {

  insereTicket($conexao, $tipo, $ticket, $relacionado, $dt_criacao, $st_azure, $descricao, $CCC, $resp_ericsson, $ult_atualizacao);

  // Substitua 'YOUR_BOT_TOKEN' pelo token do seu bot
  $token = '6584568113:AAHDqzrRitEsv7dGnPqvVZ58Ou1ntwj_Dqg';

  $telegram = new Api($token);

  // ID do chat ou usuário para o qual você deseja enviar a mensagem
  $chatId = '5922069611';

  // Mensagem que você deseja enviar
  $message = "Novo chamado do tipo: $tipo com a descrição: $descricao" ;

  // Enviar a mensagem para o chat
  $response = $telegram->sendMessage([
      'chat_id' => $chatId,
      'text' => $message,
  ]);

header("Location:chamados.php");

} catch (Exception $e) {
  header("Location:index.php");
}



?>
