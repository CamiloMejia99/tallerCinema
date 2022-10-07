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
								<form action="./impresion.php" method="POST">
									<ul class="list-group list-group-light" align="center">
										
										<li class="list-group-item">
											 <a href="register.php"  class="btn btn-success"> Opcion 1 </a>
											<button type="button" class="btn btn-warning" onclick="opcion2()">OPCION 2</button>

											
												 <input class="btn btn-primary" type="submit" value="opcion 3">
											

										</li>

										<li class="list-group-item">	
											<div class="container">
												<div class="row">
													<div class="col-6">
														<div class="col-6">
														<div class="col" for="codigoP">
															<input type="number" name="codigoP" id="codigoP" class="form-control" placeholder="codigo Pelicula" aria-label="First name" min= "1" max="10000000000">
														</div>
													</div>
													</div>
													<div class="col-6">
														<div class="col" for="nombreP">
															<input type="text" name="nombreP" id="nombreP" class="form-control" placeholder="Nombre" aria-label="First name">
														</div>
													</div>
												</div>
											</div>							
										</li>

										<li class="list-group-item">	
											<div class="container">
												<div class="row">
													<div class="col-6">
														<div class="col" for="generoP">
															<input type="text" name="generoP" id="generoP" class="form-control" placeholder="Genero" aria-label="First name">
														</div>
													</div>
													<div class="col-6">
														<div class="col" for="precioP">
															<input type="number" name="precioP" id="precioP" class="form-control" placeholder="Precio" aria-label="First name" min= "1" max="1000000000">
														</div>
													</div>
												</div>
											</div>							
										</li>	

										<li class="list-group-item">	
											<div for="txt_resul">
												<p id="txt_resul">Resultado:  </p>
																												
											</div>					
										</li>	
								</form>	
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