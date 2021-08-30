<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="js/thumbelina.css">
	<script src="js/thumbelina.js"></script>
	<title>paginas de Inicio</title>
	<link rel="stylesheet" type="text/css" href="js/thumbelina.css">
	<script src="js/thumbelina.js"></script>
	
</head>
<style type="text/css">
		#contenedor1{
			float: left;
			background-color: skyblue;
			width: 400px;
			height: 400px;
		}
		#contenedor2{
			float: left;
			background-color: green;
			width: 800px;
			height: 400px;
		}
		#slider{
			position: relative;
			margin-left: 20px ;
			height: 120px;
			width:  256px;
			border-top: 1px solid #aaa;
			border-bottom: 1px solid #aaa;

		}
	</style>
	<script type="text/javascript">
		////script para el slader
		$(function(){
		$('#slider').Thumbelina({
			$bwdBut:$('#slider .left'),
			$fwdBut:$('#slider .right')
		});
		});
		//contenido interno del slider
		function imagen(img){
			if (img.id=="1") {
		document.getElementById("caja").src="productos/cocaCola.png";
		document.getElementById("nombre").value="Coca Cola";
		document.getElementById("valor").value="1";

			}
			if(img.id=="2"){
				document.getElementById("caja").src="productos/fanta.png";
				document.getElementById("nombre").value="Coca Cola";
				document.getElementById("valor").value="1.5";

			}
			if(img.id=="3"){
				document.getElementById("caja").src="productos/incaKola.png";
				document.getElementById("nombre").value="Coca Cola";
				document.getElementById("valor").value="0.5";

			}
			if(img.id=="4"){
				document.getElementById("caja").src="productos/pepsi.png";
				document.getElementById("nombre").value="Coca Cola";
				document.getElementById("valor").value="0.5";

			}
			if(img.id=="5"){
				document.getElementById("caja").src="productos/sprite.png";
				document.getElementById("nombre").value="Coca Cola";
				document.getElementById("valor").value="0.5";

			}
			if(img.id=="6"){
				document.getElementById("caja").src="productos/nestea.png";
				document.getElementById("nombre").value="Coca Cola";
				document.getElementById("valor").value="1";

			}
		}
	</script>
<body>
	<div id="contenedor1">
		<div id="slider">
			<div class="thumbelina-but horiz left">&#706</div>
			<ul>
			<li><img src="productos/cocaCola.png" onclick="imagen(this)"id="1" style="width: 110px; height: 110px;"></li>
			<li><img src="productos/fanta.png" onclick="imagen(this)" id="2" style="width: 110px; height: 110px;"></li>
			<li><img src="productos/incaKola.png" onclick="imagen(this)"id="3" style="width: 110px; height: 110px;"></li>
			<li><img src="productos/pepsi.png" onclick="imagen(this)"id="4" style="width: 110px; height: 110px;"></li>
			<li><img src="productos/sprite.png" onclick="imagen(this)"id="5" style="width: 110px; height: 110px;"></li>
			<li><img src="productos/nestea.png" onclick="imagen(this)"id="6" style="width: 110px; height: 110px;"></li>
			</ul>


			<div class="thumbelina-but horiz right">&#707</div>
				
		</div>
	</div>
	<div id="contenedor2">
	<img src="" id="caja" style="width: 250px; height: 200px;">
	<table border="1">
		<tr>
			<td ><input type="text"id="nombre"></td>
			<td ><input type="text"id="valor"></td>
			<td></td>
		</tr>
	</table>
	</div>

	
</body>
</html>