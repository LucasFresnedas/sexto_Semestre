<?php
include("conexao.php");
include("classes.php");
session_start();
if($_SESSION['log']!="ativo"){
session_destroy();
header("Location:login_inicio.php");
}
 ?>
<!doctype html>
<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ericsson Painel Mediação</title>
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin/cool-gray.css">
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">

            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">


                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->
                  <div class="container">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
													  <li><a class="page-scroll" href="index.php">Home</a></li>
                            <li><a class="page-scroll" href="chamados.php">Chamados</a></li>
                            <li><a class="page-scroll" href="tratamentos.php">Tratamentos</a></li>
                            <li><a class="page-scroll" href="Informacoes_med.php">Informações MED</a></li>
                            <li><a class="page-scroll" href="diario_med.php">Diário de bordo</a></li>
														<li><a class="page-scroll" href="sair.php">Sair</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->
            </header>
            <!-- ========= END HEADER =========-->

        	<!-- PAINEL PRINCIPAL COMEÇO -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/fundo_principal.jpg);">
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">
						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1>Chamados Mediação</h1>
								<p><img src="img/logo2.png" height="200px" width="200px"></p>
								<p>#ImaginePossible</p>
                                <div class="extra-space-l"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- PAINEL PRINCIPAL FIM -->
			<!-- Quebra de linha -->
			<br>
			<br>
			<!-- Quebra de linha -->
			<!-- Inicio da lista de chamados -->
			<section id="main-container" class="main-container">
			  <div class="container">

          <div style="display: flex; justify-content: center;">
            <a href="form_new_ticket.php" style="text-decoration: none; margin-right: 20px;">
              <button type="submit" onclick="return confirm('Tem certeza que deseja abrir um novo chamado?')" style="padding: 10px 20px; border: 1px solid black;">Criar novo chamado</button>
            </a>
            
            <a href="chamados_resolvidos.php" style="text-decoration: none; margin-right: 20px;">
              <button type="submit" style="padding: 10px 20px; border: 1px solid black;">Casos Resolvidos</button>
            </a>

            <a href="https://timbrasil.service-now.com/now/nav/ui/classic/params/target/sc_req_item_list.do%3Fsysparm_query%3Dassignment_group%253D7d1335c11be93450e9162170f54bcb3a%255EORassignment_group%253D776803bf1bd33090e9162170f54bcb1e%255Estate%253D2%255EORstate%253D5%255EORstate%253D1%26sysparm_first_row%3D1%26sysparm_view%3D" target="_blank" style="text-decoration: none; margin-right: 20px;">
              <button type="submit" style="padding: 10px 20px; border: 1px solid black;">REQS</button>
            </a>

            <a href="https://timbrasil.service-now.com/now/nav/ui/classic/params/target/incident_list.do%3Fsysparm_query%3Dassignment_group%253D7d1335c11be93450e9162170f54bcb3a%255EORassignment_group%253D0e40459e1b4af410e9162170f54bcb36%255EORassignment_group%253D776803bf1bd33090e9162170f54bcb1e%255Estate%253D3%26sysparm_first_row%3D1%26sysparm_view%3D" target="_blank" style="text-decoration: none; margin-right: 20px;">
              <button type="submit" style="padding: 10px 20px; border: 1px solid black;">Incidentes</button>
            </a>

            <a href="https://timbrasil.service-now.com/now/nav/ui/classic/params/target/problem_list.do%3Fsysparm_query%3D123TEXTQUERY321%253DCTIO%2520IT%2520-%2520INTEGRATION%2520SOLUTIONS%2520MANAGEMENT%2520-%2520MEDIA%25C3%2587%25C3%2583O%2520PRD%2520-%2520N3%255Estate%253D103%26sysparm_first_row%3D1%26sysparm_view%3D" target="_blank" style="text-decoration: none; margin-right: 20px;">
              <button type="submit" style="padding: 10px 20px; border: 1px solid black;">Problemas</button>
            </a>
          </div>
          <br>
          <br>
          <br>
          <br>
						<center><h2>Chamados em Avaliação</h2></center>
            <br>
            <center><h4>Total:<?php
            $sql = "select * from chamados where caso = 'Avaliação' order by dt_criacao DESC";
            $resultado = mysqli_query($conexao, $sql);

            $num_registros = mysqli_num_rows($resultado);

            echo " " . $num_registros;

              ?></h4></center>
            <br>
			    <div class="row">
			      <div class="col-md-12">
              <!-- Inicio tabela -->
			        <table class="table">
			            <tr>
			              <th scope="col">TIPO</th>
			              <th scope="col">TICKET</th>
			              <th scope="col">RELACIONADO</th>
			              <th scope="col">DT CRIAÇÃO</th>
			              <th scope="col">ST AZURE</th>
			              <th scope="col">DESCRIÇÃO</th>
			              <th scope="col">CCC</th>
										<th scope="col">ERICSSON</th>
										<th scope="col">ÚLT. ATUALIZAÇÃO</th>
                    <th scope="col">DIAS ABERTO</th>
			              <th scope="col">CONCLUIR</th>
			              <th scope="col">ATUALIZAR</th>
			            </tr>
									<?php
									$agendas=listaChamadosAvaliacao($conexao);
									foreach($agendas as $agenda):
                   ?>
											<tr>
												<td><?=$agenda['tipo']?></td>
												<td><?=$agenda['ticket']?></td>
												<td><?=$agenda['relacionado']?></td>
												<td><?=$agenda['dt_criacao']?></td>
												<td><?=$agenda['st_azure']?></td>
												<td><?=$agenda['descricao']?></td>
												<td><?=$agenda['CCC']?></td>
												<td><?=$agenda['resp_ericsson']?></td>
												<td><?=$agenda['ult_atualizacao']?></td>
                        <td><?php
                        $parametro = $agenda['dt_criacao'];  //<---Recebe a Data do Banco de dados
                        $parametro2 = date('d/m/Y'); //<---Recebe a data atual
                        $data1 = DateTime::createFromFormat('d/m/Y', $parametro); //<---Formata a data no formato brasileiro e recebe a data do banco
                        $data2 = DateTime::createFromFormat('d/m/Y', $parametro2); //<---Formata a data no formato brasileiro e recebe a data atual
                        $diferenca = $data1->diff($data2)->days; //<---Calcula a diferença entre as datas
                        echo " $diferenca dias."; //<---Da a saida de dados
                         ?></td>
												<td>
												<form action="conclui_chamado.php" method="post">
												<input type="hidden" name="id" value="<?=$agenda['id']?>">
												<input type="hidden" class="form-control" name="dt_fechamento" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('d/m/y H:i') ?>">
                        <input type="hidden" class="form-control" name="fechado" value="<?php echo $_SESSION['usuario']; ?>">
												<button type="submit" onclick="return confirm('Tem certeza que deseja concluir este chamado?')" class="btn-success">Concluir</button>
													</form>
												</td>
												<td>
												<form action="atualizar_chamado.php" method="post">
												<input type="hidden" name="codigo" value="<?=$agenda['id']?>">
												<button type="submit" onclick="return confirm('Tem certeza que deseja atualizar este chamado?')" class="btn-primary">Atualizar</button>
													</form>
												</td>
											</tr>
									<?php
									endforeach;
									?>
								</table>
                <!-- fim tabela -->
								</div>
							</div>
						</div>
					</section>
					<!-- fim da lista de chamados -->


        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
    <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body>


</html>
