
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Liame - Unindo do início ao fim.</title>

	<!--implementação bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--css-->
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/home.css">

	<!--favicon-->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-png">

	<!--unicons (icones que serão usados no site)-->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body>
	<main>


		<!--banner-->
		<div id="home" class="container-fluid text-center">
			<div class="landing-text">
				<img class="img-fluid banner" src="assets/img/banner-gradient.png" alt="">
			</div>
		</div>
		<!--navbar-->
		<header class="cabecalho">
			<div class="container-fluid" id="nav-container">
				<nav class="navbar navbar-expand-lg navbar-light flex-md-row bd-navbar fixed-top">

					<!--logo-->
					<a href="index.html" class="navbar-brand ml-5">
						<img class="logo" src="assets/img/logo-liame-branca.png" alt="Liame">
					</a>
					<!--botão para menu hamburguer mobile-->
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target-"#linksnavbar" aria-controls="liksnavbar" aria-expanded="false" aria-label="toggle">
						<span class="uil uil-bars"></span>
					</button>
					<!--link cabeçalho-->
					<div class="collapse navbar-collapse" id="linksnavbar">
						<div class="navbar-nav navbar-collapse justify-content-center">
							<a class="nav-item nav-link" id="especialistas-menu" href="php/especialistas.php">Especialistas</a>
							<a class="nav-item nav-link" id="consultas-menu" href="php/consultas.php">Consultas</a>
							<a class="nav-item nav-link" id="diário-de-bordo-menu" href="php/diario-de-bordo.php">Diário de Bordo</a>
							<a class="nav-item nav-link" id="quem-somos-menu" href="php/especialistas.php">Quem Somos</a>
							<a class="nav-item nav-link" id="planos-menu" href="php/planos.php">Planos para Especialistas</a>
						</div>
						<!--entrar/cadastro-->
						<div id="login" class="nav navbar-nav mr-5">
							<div class="nav-item">
								<a class="nav-item nav-link" href="layouts/entrar.html">
									<i class="uil uil-user"></i>
									Entrar
								</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<!--serviços-->
		<div id="servicos" class="container shadow-lg">
			<div class="d-flex row">

				<div class="col-md-12 col-lg-4 text-center">
					<a href="#">
						<i class="uil uil-hospital"></i>
						<h3 class="">Consultas</h3>
					</a>
					<div class="container descricao">
						<font align="center" height="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra posuere mauris mi nisl nunc non platea tincidunt. Nullam praesent sed blandit pharetra turpis.</font>
					</div>
				</div>

				<div class="col-md-12 col-lg-4 text-center">
					<a href="#">
						<i class="uil uil-syringe"></i>
						<h3 class="">Vacinação</h3>
					</a>
					<div class="container descricao">
						<font align="center" height="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra posuere mauris mi nisl nunc non platea tincidunt. Nullam praesent sed blandit pharetra turpis.</font>
					</div>
				</div>

				<div class="col-md-12 col-lg-4 text-center">
					<a href="#">
						<i class="uil uil-calender"></i>
						<h3 class="">Diário de Bordo</h3>
					</a>
					<div class="container descricao">
						<font align="center" height="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra posuere mauris mi nisl nunc non platea tincidunt. Nullam praesent sed blandit pharetra turpis.</font>
					</div>
				</div>

			</div>
		</div>

		<!-- Planos -->
		<div id="planos" class="container pr-0 pl-0">
			<div class="d-flex justify-content-center align-items-center text-center row shadow-lg">

				<div class="col-12 col-lg-4 flex-column pl-0 pr-0 flex-grow-1 text-center">
					<img id="medica" src="assets/img/medica.jpg" class="img-fluid">
				</div>

				<div class="col-12 col-lg-8 flex-column p-0">

					<div class="pt-5 pb-4">
						<h2>Planos para especialistas</h2>
						<p>Escolha o melhor plano para você:</p>
					</div>

					<div class="justify-content-center text-center row plano">
						<div class="col-12 col-md-3">
							<div id="plano melina" class="m-0">
								<i class="uil uil-baby-carriage"></i>
								<h6>Baby Melina</h6>
								<p> 1 mês </p>
								<h6 class="mt-4"> R$ 29,90 </h6>
							</div>
						</div>
						<div class="col-12 col-md-3">
							<div id="plano theo" class="m-0">
								<i class="uil uil-baby-carriage"></i>
								<h6>Baby Theo</h6>
								<p> 3 mês </p>
								<h6 class="mt-4"> R$ 79,90 </h6>
							</div>
						</div>

						<div class="col-12 col-md-3">
							<div id="plano sophia" class="m-0">
								<i class="uil uil-baby-carriage"></i>
								<h6>Baby Sophia</h6>
								<p> 6 mês </p>
								<h6 class="mt-4"> R$ 157,90 </h6>
							</div>
						</div>
						<div class="col-12 col-md-3">
							<div id="plano antony" class="m-0">
								<i class="uil uil-baby-carriage"></i>
								<h6>Baby Antony</h6>
								<p> 1 ano </p>
								<h6 class="mt-4"> R$ 310,90 </h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 p-5">
							<a href="planos.html" class="btn btn-1">Ver benefícios</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- redes sociais  -->
		<div class="container-fluid degrade-diagonal">
			<div class="d-flex justify-content-center align-items-center text-center row">
				<div class="col redes-sociais">
					<h2>Nos siga nas redes socias</h2>
					<div class="col texto">
<p>Lá voce vai receber dicas sobre a gestação, além de interagir conosco!</p>
					</div>
					<div class=" col social">
						<a class="nav-item nav-link" href="https://www.instagram.com/projeto_liame/">
							<i class="uil uil-instagram"></i>
							<h4>@projeto_liame</h4>
						</a>
						<a class="nav-item nav-link" href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
							<i class="uil uil-facebook"></i>
							<h4>Liame</h4>
						</a>
					</div>
				</div>
				<div class="col mockup-celular">
					<img id="mockup" class="img-fluid" src="assets/img/mockup.png" alt="">
				</div>
			</div>
		</div>
	</main>
	<!-- rodape -->
	<footer class="footer mt-5">
		<div class="container">
			<div class="row">
				<div class="#">
					<a href="index.html"><img src="assets/img/logo.png" class="img-fluid logo-footer" alt="logo liame"></a>
				</div>
				<div class="col">
					<h5 class="text-uppercase">Mães</h5>
					<ul class="list-unstyled">
						<li class=""><a href="php/marcar_consultas.php">Agendar consulta</a></li>
						<li class=""><a href="php/especialistas.php">Especialistas</a></li>
						<li class=""><a href="php/diario_bordo_gestante.php">Diário de bordo</a></li>
						<li class=""><a href="php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
					</ul>
				</div>
				<div class="col">
					<h5 class="text-uppercase">Especialistas</h5>
					<ul class="list-unstyled">
						<li class=""><a href="php/planos.php">Planos para especialistas</a></li>
						<li class=""><a href="php/central_ajuda.php">Central de ajuda</a></li>
						<li class=""><a href="termos_uso_profissional.html">Termos de uso de profissional</a></li>
					</ul>
				</div>
				<div class="col">
					<h5 class="text-uppercase">Serviços</h5>
					<ul class="list-unstyled">
						<li class="list-item"><a href="php/quem_somos.php">Quem somos</a></li>
						<li class=""><a href="php/contato.php">Contato</a></li>
						<li class=""><a href="php/privacidade_cookie.php">Privacidade e cookies</a></li>
						<li class=""><a href="termos_condicoes_uso.html">Termos e condições de uso</a></li>
					</ul>
				</div>
				<div class="col">
					<div class="social-links">
						<a class="nav-item nav-link" href="https://www.instagram.com/projeto_liame/">
							<i class="uil uil-instagram"></i>
						</a>
						<a class="nav-item nav-link" href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
							<i class="uil uil-facebook"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!--implementação jquery, poppers.js e plugin bootstrap-->
	<script src="assets/js/scripts.js"></script>

	<!--progressbar-->
	<script src="assets/js/progressbar.min.js"></script>

	<!--biblioteca parallax-->
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>