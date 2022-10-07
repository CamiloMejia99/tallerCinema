<!DOCTYPE html >
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CINEMA</title>
	<link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Hindi&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/icon_pag.png">
	<link href="/path/print.css" media="print" rel="stylesheet" />
	<link rel="stylesheet" href="css/diseño1.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
	integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min,js"></script>
	

	<br>

	<style>
		body {
			background-image: url(img/fondo1.png);
			background-size: cover;
		}
	</style>

</head>

<body>
	<font color="white">
		<div class="container" >
			<div class="row">
				<div class="col-8">
					<h6>UNIVERSIDAD DE NARIÑO EXTENSIÓN IPIALES</h6>
					<h6>DESARROLLADO POR:</h6>
					<h6>IVAN CAMILO MEJIA PARRA</h6>
				</div>
				<div class="col-4">
					<img heigth="100" width="100"src="img\udenar.png" alt="No hay imagen" >
				</div>
			</div>
		</div>
		<br>
	</font>		
	<div class="divisor"></div>

	<div align="center">
		<img heigth="700" width="700"src="img\cinema.png" alt="No hay imagen" >
	</div>

	<div id="contenedorp" class="container, col-12" ><!--inicio contenedor principal -->
		<div class="row">
			<center>
				<div id="contenedor2"class="col-6">
					<div class="card border-info" >
						<div class="card-body" style="background-color:#C22323" >
							<h2>INGRESE DATOS DE LA PELICULA:</h2>
							<ul class="list-group list-group-light" align="center">
								
								<li class="list-group-item">
									<button type="button" class="btn btn-success" onclick="opcion1()">OPCION 1</button>
									<button type="button" class="btn btn-warning" onclick="opcion2()">OPCION 2</button>
									<button type="button" class="btn btn-danger" onclick="opcion3()">OPCION 3</button>
								</li>

								<li class="list-group-item">	
									<div class="container">
										<div class="row">
											<div class="col-6">
												<div class="col" for="campo1">
													<input type="text" name="campo1" id="campo1" class="form-control" placeholder="Campo 1" aria-label="First name">
												</div>
											</div>
											<div class="col-6">
												<div class="col" for="campo2">
													<input type="text" name="campo2" id="campo2" class="form-control" placeholder="Campo 2" aria-label="First name">
												</div>
											</div>
										</div>
									</div>							
								</li>

								<li class="list-group-item">	
									<div class="container">
										<div class="row">
											<div class="col-6">
												<div class="col" for="campo3">
													<input type="text" name="campo3" id="campo3" class="form-control" placeholder="Campo 3" aria-label="First name">
												</div>
											</div>
											<div class="col-6">
												<div class="col" for="precio">
													<input type="number" name="precio" id="precio" class="form-control" placeholder="Precio" aria-label="First name" min= "1" max="1000000000">
												</div>
											</div>
										</div>
									</div>							
								</li>	
								
							</ul>
						</div>
					</div>
				</div>
			</center>
		</div>

	</div>	<!--fin contenedor principal-->
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>