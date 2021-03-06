<?php 
session_start();

if(isset($_SESSION['id_mae'])){
	$id_mae = $_SESSION['id_mae'];
	$id_profissional = 0;
	$id_adm = 0;
  }
  else if(isset($_SESSION['id_profissional'])){
	$id_profissional = $_SESSION['id_profissional'];
	$id_mae = 0;
	$id_adm = 0;
  }
  else if(isset($_SESSION['id_adm'])){
	$id_adm = $_SESSION['id_adm'];
	$id_profissional = 0;
	$id_mae = 0;
  }
  else{
	$id_adm=0;
	$id_profissional = 0;
	$id_mae = 0;
  }
  

include 'conexao.php'; 


?>
<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Procura por profissional | Liame</title>

	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">

	<!--favicon-->
	<link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">

	<!--unicons (icones que serão usados no site)-->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
	<?php

include_once 'menu.php';
Menu($id_mae, $id_profissional, $id_adm);

?>
	<main>
	
		<div id="busca-container" class="d-flex">
			<div class="container justify-content-center align-self-center">
				<div class="row">
					<div class="col-md-12 align-center text-center">
						<h1 class="hero-title">
							Encontre agora um especialista
						</h1>

						<div class="">
							<form name="pesquisa-profissional" action="procura_profissional.php" class="ps-lg-5 me-lg-5" method="post">
								<div class="input-group my-5">
									<div class="col">
										<select name="especialidade" id="select-busca1" class="form-select" aria-label="Seleção de especialista">
											<option selected disabled>Especialidade </option>
											<?php
												$sql_especialidade = 'select id_especialidade, especialidade from especialidade;';
												$resul_especialidade = mysqli_query($link, $sql_especialidade);
												if($resul_especialidade->num_rows > 0){
													while($exibe = $resul_especialidade->fetch_array()){
											?>
											<option value="<?php echo $exibe['id_especialidade']; ?>"> <?php echo utf8_encode($exibe['especialidade']); ?></option>
											<?php
													}
												}
											?>
										</select>
									</div>
									<div class="col">
										<select name="estado" id="select-busca2" class="form-select" aria-label="Seleção de especialista">
											<option selected disabled>Estado </option>
											<?php
												$sql_estado = 'select id_estado, estado from estado;';
												$resul_estado = mysqli_query($link, $sql_estado);
												if($resul_estado->num_rows > 0){
													while($exibe = $resul_estado->fetch_array()){
											?>
											<option value="<?php echo $exibe['id_estado']; ?>"> <?php echo utf8_encode($exibe['estado']); ?></option>
											<?php
													}
												}
											?>
										</select>
									</div>
									<div class="btn-container col-md-3 col">
										<input type="submit" class="button button-primary btn btn-primary" name="buscar" value="Buscar">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
  		<!-- EXIBICAO PROFISSIONAL -->
		<div id="exibir-profissional" class="container d-flex justify-content-center py-5">
			<div class="row">
				<?php
					//resgata dados selecionados
					if(isset($_POST['buscar'])){
						$buscarprofissional = $_POST ['especialidade'];
						$buscarestado = $_POST['estado'];
					// procura no banco de dados
						$sql_busca = ("select esp.id_especialidade, especialidade, 
										est.id_estado as estado, uf, 
										pro.id_profissional as id, nome_profissional, email_profissional, foto_perfil_profissional, 
										ddd_telefone_profissional, numero_telefone_profissional, 
										descricao_endereco, logradouro, numero_endereco, cep, tipo_logradouro, cidade, estado, bairro
					
					
										from especialidade as es 
					
										inner join especialidade_profissional as esp on esp.id_especialidade = es.id_especialidade 
										inner join profissional as pro on pro.id_profissional = esp.id_profissional 
										inner join endereco_profissional as ende on ende.id_endereco = pro.id_endereco 
										inner join estado as est on ende.id_estado = est.id_estado 
										inner join cidade as cid on ende.id_cidade = cid.id_cidade 
										inner join tipo_logradouro as logr on ende.id_tipo_logradouro = logr.id_tipo_logradouro 
										inner join telefone_profissional as tel on tel.id_telefone = pro.id_telefone 
										WHERE esp.id_especialidade = '$buscarprofissional' AND est.id_estado = '$buscarestado'" );
						  
						$consulta = mysqli_query($link, $sql_busca);
						if($consulta && $consulta->num_rows > 0){
						  while ($vetor = mysqli_fetch_array($consulta)){
							$nome_profissional= $vetor['nome_profissional'];
							$especialidade_profissional=$vetor['especialidade'];
							$estado_profissional=$vetor['estado'] . ' - '. $vetor['uf'];
							$cidade_profissional=$vetor['cidade'];
							$cep_profissional=$vetor['cep'];
							$foto_profissional=$vetor['foto_perfil_profissional'];
							$bairro_profissional=$vetor['bairro'];
							$descricao_endereco_profissional=$vetor['descricao_endereco'];
							$numero_endereco_profissional=$vetor['numero_endereco'];
							$endereco_profissional= $vetor['tipo_logradouro'].': ' . $vetor['logradouro'];
							$telefone_profissional= '('.$vetor['ddd_telefone_profissional'].') '.$vetor['numero_telefone_profissional'];
							$id_profissional= intval ($vetor['id']);
							// $youtube_profissional = $vetor['youtube_profissional'];
							// $whatsapp_profissional = $vetor['whatsapp_profissional'];
							// $telegram_profissional = $vetor['telegram_profissional'];
							// $facebook_profissional = $vetor['facebook_profissional'];
							// $instagram_profissional = $vetor['instagram_profissional'];
							// $linkedin_profissional = $vetor['linkedin_profissional'];
							?>



				<div class="col-lg-3 col-md-4 col-sm-12">
                  	<div class="card" id="profissional">
							<div class="card-img-top text-center">
								<?php
								if ($foto_profissional != ""){
								//caso o profissional tiver foto de perfil aparece aqui, tem esse código aqui que eu peguei do thiago mas não consegui usar
								//'<img src="../../IMG/Imagem_Usuario/'.$dados_usuario['imagem'].'">');
									?><img id="img_exibe" class="img-fluid" src="../assets/img_perfil/profissional/'.$dados_usuario['imagem'].'" alt=""><?php
								}else{
								// caso não tiver aparece essa padão
									?><img id="img_exibe" class="img-fluid" src="../assets/img/icone-especialista.png" alt=""><?php
								}
								?>
							</div>
							<hr>
							<div class="card-body">
								<?php
									echo utf8_encode ('<b>Nome: </b>' .$nome_profissional.'<br>');
									echo utf8_encode ('<b>Especialidade: </b>' .$especialidade_profissional.'<br>');	
									echo utf8_encode ('<b>Estado: </b>' .$estado_profissional.'<br>');		
									echo utf8_encode ('<b>Cidade: </b>' .$cidade_profissional.'<br>');
									echo utf8_encode ('<b>CEP: </b>' .$cep_profissional.'<br>');	
								?>
							</div>
							<div class=" text-center pt-3">
								<a href="exibe_profissional?id=<?php echo $id_profissional ?>" class="button button-tertiary btn btn-primary">Ver mais</a>
							</div>
					</div>
				</div>
			<?php
				}
			}
			}else{
			// caso não tenha encontrado nehum profissinal
			echo "Nenhum profissional encontrado nessa área.";
			}
			?>
				</div>
			</div>
		</div>



	</main>
	<footer>
		<div id="rodape" class="container">
			<div class="conteudo py-5">
				<div class="row">
					<div class="logo col-md-2">
						<img id="logo" class="img-fluid" src="../assets/img/logo_liame.png" alt="">
					</div>
					<div class="py-lg-0 py-mb-5 col-md-8 d-flex justify-content-center align-self-center">
						<div class="px-lg-4 px-mb-1">
							<h5 class="text-uppercase">Mães</h5>
							<ul class="list-unstyled">
								<li class=""><a href="../php/procura_profissional.php">Consultas</a></li>
								<li class=""><a href="../php/diario_bordo.php">Diário de bordo</a></li>
								<li class=""><a href="../php/cadastro_mae1.php">Carteira de vacinação</a></li>
							</ul>
						</div>
						<div class="px-lg-4 px-mb-1">
							<h5 class="text-uppercase">Especialistas</h5>
							<ul class="list-unstyled">
								<li class=""><a href="../layouts/central_ajuda.php">Central de ajuda</a></li>
								<li class=""><a href="../layouts/termos_uso_profissional.php">Termos de uso de profissional</a></li>
								<li class=""></li><a href="../index.php">Página Inicial</a>
							</ul>
						</div>
						<div class="px-lg-4 px-mb-1">
							<h5 class="text-uppercase">Serviços</h5>
							<ul class="list-unstyled">
								<li class="list-item"><a href="../layouts/quem_somos.php">Quem somos</a></li>
								<li class=""><a href="../layouts/Contatos.php">Contato</a></li>
								<li class=""><a href="../layouts/termos_condicoes_uso.php">Termos e condições de uso</a></li>
							</ul>
						</div>
					</div>
					<div class="social col-md-2">
						<ul>
							<li>
								<a href="https://www.instagram.com/projeto_liame/">
									<img src="../assets/img/instagram.svg" alt="Icone Instagram">
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
									<img src="../assets/img/facebook.svg" alt="Icone Facebook">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/main.js"></script>
</body>

</html>