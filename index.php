<?php 
	include("funciones.php");

	session_start();

	$conec=conexion();
	if(isset($_POST['enviar'])){
		$usuario=$_POST['usuario1'];
		$clave=$_POST['clave1'];

		$validar= ingreso($usuario,$clave);

		if($validar>0){
			$_SESSION['usuario']=$usuario;
			$query="select * from clientes where cliCedula='$usuario' and cliClave='$clave'";
			$enviarC=mysqli_query($conec,$query);
			$ver= mysqli_fetch_array($enviarC);

			$_SESSION['id']=$ver['cliId'];
			$_SESSION['nombre']=$ver['cliNombre'];

			header('Location:pagina.php');
		}else{
			echo'<script>alert("error");</script>';
		}
	}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Formulario</title>
 </head>
 <body>
 	<form method="post">
 		<fieldset>
 			<legend>Formulario</legend>
 			<label>Ingrese su cedula</label>
 			<input type="text" name="usuario1" placeholder="Ingrese su cedula">

 			<label>Ingrese su contraseña</label>
 			<input type="text" name="clave1"placeholder="ingrese sucontraseña">
 			<input type="submit" name="enviar">
 		</fieldset>
 	</form>
 	
 </body>
 </html>