<?php session_start();
$dinero=10;
	if(isset($_SESSION['dinero'])){
			$dinero=$_SESSION['dinero'];
			if($_SESSION['dinero']<0){
				$dinero=10;	
			}
	}
	$_SESSION['dinero']=$dinero;
//echo $_SERVER['HTTP_USER_AGENT'];

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jan Ken Po</title>
</head>
<style>
	#container{
		width: 646px;
		height:300px;
		margin: 100px auto;
	}
	.botonSeleccion{
		width:200px;
		height:200px;
		margin-left: 10px;
		border:1px solid black;
	}

</style>
<body>

	<div id="container">
		<h1>Jugar</h1>
		<p>Su saldo es: S/.<?php echo 	$dinero?></p>
		<p>Seleccione una opci&oacute;n para jugar (Costo S/.2)</p>
		<form action="procesar_jugada.php" method="get">
			<input type="image" name ="jugada" value="0" class="botonSeleccion" src="http://www.beliplus.com/images/TIJERA-CORTE-CHIROFORM-5--2.jpg" alt="">
			<input type="image" name ="jugada" value="1" class="botonSeleccion" src="http://cssjs.decoracion2.com/imagenes/2011/01/piedra_.jpg" alt="">
			<input type="image" name ="jugada"  value="2"class="botonSeleccion" src="http://upload.wikimedia.org/wikipedia/commons/3/3f/Paper_sheet.jpg" alt="">
			
		</form>
	</div>
</body>
</html>