<?php
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
								<h1>MEDIAÇÃO Ferramentas</h1>
								<p><img src="img/logo2.png" height="200px" width="200px"></p>
								<p>#ImaginePossible</p>
                                <div class="extra-space-l"></div>
							</div>
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- PAINEL PRINCIPAL FIM -->
			<section id="portfolio-section" class="page bg-style1">
				<div class="container">
							<div class="row">
									<div class="col-md-12">
											<div class="portfolio">
													<!-- Begin page header-->
													<div class="page-header-wrapper">
															<div class="container">
																	<div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
																			<h2>Nosso trabalho</h2>
																			<div class="devider"></div>
																			<p class="subtitle">Entenda o Fluxo...</p>
																	</div>
															</div>
													</div>
													<!-- End page header-->
													<div class="portfoloi_content_area" >
															<div class="portfolio_menu" id="filters">
																	<ul>
																			<li><a href="#porfolio_menu" data-filter=".serviceNow">Service Now</a></li>
																			<li><a href="#porfolio_menu" data-filter=".azure" >Azure</a></li>
																			<li><a href="#porfolio_menu" data-filter=".puttyManager">Putty Manager</a></li>
																			<li><a href="#porfolio_menu" data-filter=".guiManager">GUI Manager</a></li>
																			<li><a href="#porfolio_menu" data-filter=".painelAlarmes">Painel de Alarmes</a></li>
                                      <li><a href="#porfolio_menu" data-filter=".fluxoDados">Fluxo de dados Mediação</a></li>
																	</ul>
															</div>
															<div class="portfolio_content">
																	<div class="row"  id="portfolio">
																			<div class="col-xs-12 col-sm-4 serviceNow">
																			<div class="portfolio_single_content">
																							<img src="img/portfolio/service_now.jpg"/>
																							<div>
																									<a href="https://timbrasil.service-now.com/now/nav/ui/classic/params/target/%24pa_dashboard.do" target="_blank">Service Now</a>
																									<span>Se trata de uma ferramenta de trabalho, onde estão formalizados, todos os tickets a qual a mediação trata na qual os principais são Incidentes, REQS, EVE, TSKS e TASK'S.</span>
																							</div>
																					</div>
																			</div>
																			<div class="col-xs-12 col-sm-4 azure">
																					<div class="portfolio_single_content">
																							<img src="img/portfolio/azure.jpg" height="360px" width="199"/>
																							<div>
																									<a>Azure</a>
																									<span>Azure se trata de uma ferramenta onde estão formalizados os chamados que se denominam TIR's, BUG's e INF's. Se tratam de chamados no qual fazem uma melhoria/correção no fluxo da mediação. Chamados são tratados pelo CCC.</span>
																							</div>
																					</div>
																			</div>
																			<div class="col-xs-12 col-sm-4 puttyManager">
																					<div class="portfolio_single_content">
																							<img src="img/portfolio/putty.jpg" height="360px" width="199"/>
																							<div>
																									<a href="https://ericsson-my.sharepoint.com/:u:/p/lucas_fresnedas_lopes/EbL8uNE-hFRHlS350AP_c70BXHDkz2MwCeJMEZbmQX5IFg?e=fNa1jy" target="_blank">Putty Manager</a>
																									<span>Ferramenta na qual acessamos a interface LINUX dos servidores lógicos. No putty manager podemos acessar diretórios ver capacidades de filesystem, swap e arquivos que passam no fluxos dos servidores a qual monitoramos.</span>
																							</div>
																					</div>
																			</div>
																			<div class="col-xs-12 col-sm-4 guiManager">
																					<div class="portfolio_single_content">
																							<img src="img/portfolio/java.jpg" height="360px" width="199"/>
																							<div>
																									<a>GUI Manager EMM7/EMM20-CGNAT</a>
																									<span>Se trata de um mediador JAVA onde acessamos os servidores lógicos a qual nosso contrato atende. No mediador podemos acessar os servidores de produção(SNELNX470-476) os servidores de Coleta(SNELNX93-95) e os demais servidores do contrato do CGNAT.</span>
																							</div>
																					</div>
																			</div>
                                      <div class="col-xs-12 col-sm-4 painelAlarmes">
                                          <div class="portfolio_single_content">
                                              <img src="img/portfolio/img_eric.jpg" height="370px" width="500px"/>
                                              <div>
                                                  <a>Painel de Alarmes - Necessário VPN para acessar</a>
                                                  <span>Ferramenta desenvolvida pela própria Ericsson na qual podemos ver quais problemas estão impactando no fluxo da mediação por meio de alarmes. Esses alarmes são monitorados pelo Comand Center e caem na fila da mediação pelo Service Now.</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-4 fluxoDados">
                                          <div class="portfolio_single_content">
                                              <img src="img/portfolio/torre_5g.jpeg" height="370px" width="500px"/>
                                              <div>
                                                  <a href="https://ericsson-my.sharepoint.com/:u:/p/lucas_fresnedas_lopes/EY3dcOmF-RdOvkeQxgYUIm8Br011L1BrROxbWfgT3wtouA?e=JJCUGQ" target="_blank">Fluxo de dados Mediação</a>
                                                  <span>Conheça a arquitetura do fluxo de dados da Mediação.</span>
                                              </div>
                                          </div>
                                      </div>
																	</div>
															</div>
													</div>

											</div>
									</div>
							</div>
					</div>
			</section>




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
