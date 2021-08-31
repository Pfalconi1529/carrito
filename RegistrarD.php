<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
  	src="https://code.jquery.com/jquery-3.6.0.min.js"
 	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  	crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="app.js"></script>
	<title>Buy Cart Class</title>
</head> 
<body class="bg-dark">
	<div class="container p-5 img-fluid  text-info " >
		<div class="row ">
			<div class="col text-center" >
				<img src="imagenes/fondo2.jpg" width="600" class="rounded float-start" height="650">
				
			</div>
			<div class="col border border-info">
				<div class="text-end">
					
				</div>
				<div>
					<h2 class="fw-bold text-center py-5">Register with your data </h2>
					<form id="form" action="principal.php" method="post">
						<div class="mb-4">
							<label for="email" class="form-label">Usuario</label>
							<input type="text" class="form-control" name="usuario" id="usuario" >
						</div>
						<div class="mb-4">
							<label for="password" class="form-label"></label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						<div class="mb-4 form-check">
							<input type="checkbox" name="connected" class="form-check-input">
							<label for="connected" class="form-check-label" >Mantenerme conectado</label>
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-primary" name="iniciar" id="iniciar">Iniciar Sesión</button>
						</div>
						<div class="my-3">
							<span>No tienes Cuenta? <a href="#">Registrate</a></span><br>
							<span>Recupera tu cuenta? <a href="#">Recuperar Password</a></span>
						</div>
					</form id="form">
					<div class="container w-100 my-5">
						<div class="row text-center">
							<div class="col-12">Iniciar Sesión</div>
						</div>
						<div class="row">
							<div class="col">
								<button class="btn btn-outline-primary w-100 my-1">
								<div class="row align-items-center">
									<div class="col-2">
										<img src="imagenes/faceboock.png" width="32" alt="">
									</div>
									<div class="col-10 text-center">
										Faceboock
									</div>
								</div>
								</button>
							</div>
							<div class="col">
								
								<button class="btn btn-outline-danger w-100 my-1">
								<div class="row align-items-center">
									<div class="col-2">
										<img src="imagenes/gmail.png" width="32" alt="">
									</div>
									<div class="col-10 text-center">
										Google
									</div>
								</div>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>