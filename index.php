<?php require_once 'includes/conection.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Grupo Mas</title>
	<link rel="icon" href="img/log.png" type="img/png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="description" content="" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
	<div id="wrapper">
		<div class="row">
			<?php require_once 'includes/header.php'; ?>
		</div>
		<!-- Slider -->
		<div class="flex-caption">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="quick-search">
							<div class="row">
								<form role="form">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="form-group">
											<label for="status">Estado</label>
											<select class="form-control">
												<option>En venta</option>
												<option>En alquiler</option>
											</select>
										</div>
									</div>
									<!-- break -->
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="form-group">
											<label for="type">Tipo</label>
											<select class="form-control">
												<option>Casa</option>
												<option>Departamento</option>
												<option>Local</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 col-sm-12"><input name="submit" value="Buscar" class="btn btn-success btn-lg btn-block" type="submit"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="slides">
			<img src="img/slides/1.jpg">
		</a>
		<section class="hero-text">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="aligncenter">
							<h1 class="aligncenter">Despreocupate, nosotros nos encargamos</h1>
							<p>Grupo mas nace como una necesidad de la ciudad por hacer llegar al cliente su hogar, el cual conservara como su nueva casa acompañados de la confianza y el respaldo que un grupo de personas amablemente les brindara.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="social text-center">
					<div class="row">
						<div class="skill-home">
							<div class="skill-home-solid clearfix">
								<div class="col-md-4 text-center">
									<div class="skill-homes">
										<div class="boton text-center">
											<span class="icons c1"><a href="index.html"><i class="fa fa-city"></i></a></span></div>
										<div class="box-area"></div>
										<h3>Inversiones<br>inmobiliarias</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<span class="icons c2"><a href="index.html"><i class="far fa-handshake"></i></a></span>
									<div class="box-area">
										<h3>Administración<br>de consorcios</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<span class="icons c3"><a href="index.html"><i class="fa fa-building"></i></a></span>
									<div class="box-area">
										<h3>Desarrollos<br>inmobiliarios</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="skill-home-solid clearfix">
						<div class="col-md-12">
							<div class="about-logo">
								<h3>Loteo <span class="color">Salto</span></h3>
								<label class="color=black"><span class="color">
										<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
									</span>
								</label>
								<a href="#" class="btn">leer mas</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<?php require_once 'includes/footer.php'; ?>

	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/owl-carousel/owl.carousel.js"></script>
</body>

</html>