<?php 
	function conexion(){
		$servidor="localhost";
		$usuario="root";
		$clave="";
		$base="cart";
		$conect= mysqli_connect($servidor, $usuario, $clave, $base) or die("error de conexion");
		return $conect;
	}
	function ingreso($usu,$clave){
		$conect=conexion();
		$query="select * from clientes where cliCedula='$usu' and cliClave='$clave'";
		$enviar= mysqli_query($conect,$query);
		$ver= mysqli_num_rows($enviar);
		return $ver;
	}
	function registro($a, $b, $c, $d, $e){
		$conect=conexion();
		$query="insert into clientes values(0,$a,$b,$c,$d,$e)";
		$enviar=mysql_query($conect,$query);
		return $enviar;
	}

 ?>