
<!DOCTYPE html>
<html>
<head>
	<title>Home Page MedConsulta</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/cabecalho.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> 
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
</head>
<body>
	<?php include("cabecalho.php") ?>

	<section class="additions">
		<div class="container">
			<div class = "row">
				<div class="col-sm-4">
					<h2 class="destaques"> Aqui nossos <strong>médicos</strong> são: </h2> 
					<div class="display">
						<figure>
							<img src="img/eye.png" alt="atenciosos">
							<figcaption>
								<h4>Atenciosos</h4>
							</figcaption>
						</figure>

						<figure>
							<img src="img/stethoscope.png">
							<figcaption>
								<h4>Especialistas</h4>
							</figcaption>
						</figure>

						<figure>
							<img src="img/user-md-symbol.png">
							<figcaption>
								<h4>Eficientes</h4>
							</figcaption>
						</figure>
					</div>
				</div>

				<div class="col-sm-8 update">
					<div class="box">
						<img src="img/banner1.jpg" class="img-thumbnail" height="300"> 
					</div>
				</div>
			</div>
		</div>	
	</section>
	<section class="block">
		<div class= "container">
			<h1 class="destaques"> A missão da <strong>MedConsulta</strong> é sua <strong>saúde!</strong> </h1>
			<h2 class="destaques">Conheca nossos <strong>diferenciais: </strong></h2>
			<ul class ="diferenciais">
				<li>
					<figure>
						<img src="img/checked.png" alt="confianca">
					</figure>
					<figcaption>
						<i class="em em-blush"></i>
						<i class="em em-blush"></i>
						Se esqueca dos planos de saude: o aperto do fim do mes acabou. Nossos precos foram pensados para tornar a saude acessivel a todos, e com certeza voce encontrara a consulta ideal aqui! 
						<i class="em em-blush"></i>
						<i class="em em-blush"></i>
					</figcaption>
				</li>
				<li>
					<figure>
						<img src="img/file.png" alt="ficha">
					</figure>
					<figcaption>
						<i class= "em em-clap"></i>
						<i class= "em em-clap"></i>
						Somos uma policlinica, ou seja, contamos com diversas especializacoes: psiquiatra, clinico, oftalmologista e cardio 
						<i class= "em em-clap"></i>
						<i class= "em em-clap"></i>
					</figcaption>
				</li>
				<li>
					<figure>
						<img src="img/thumb-up.png" alt="carinho">
					</figure>
					<figcaption>
						Prezamos pela nossa relacao com voce. Somos atenciosos e escutaremos todas suas queixas: espere sempre ser bem atendido.
					</figcaption>
				</li>
			</ul>
		</div>
	</section>
	<?php include("rodape.php"); ?>