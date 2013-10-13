<?php session_start();
$imgJugadas = array('http://www.beliplus.com/images/TIJERA-CORTE-CHIROFORM-5--2.jpg' ,'http://cssjs.decoracion2.com/imagenes/2011/01/piedra_.jpg','http://upload.wikimedia.org/wikipedia/commons/3/3f/Paper_sheet.jpg' );
//echo $_SERVER['HTTP_REFERER'];
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
	#container>*{

		float:left;
	}
	.botonSeleccion{
		width:200px;
		height:200px;
		margin:0 40px;
		border:2px solid black;
	}
	.vs{
		font-family: arial;
		font-weight: bold;
		font-size: 18px;
		padding: 90px 5px;
	}
	.clear{
		clear:both;
	}
	.title{
	text-align: center;

	}
</style>
<body>

	<div id="container">
		<?php if(!isset($_SESSION['dinero'])){ ?>
		<div><p>Lo sentimos, su sessi&oacute;n ha caducado </p></div>
		<?php }else{ if($_SESSION['dinero']<0){ ?>
				<div><p>Lo sentimos, ha perdido el juego</p></div>
			<?php 	}else{ ?>
				<div>
					<p class="title">Usted</p>
					<img class="botonSeleccion" src="<?php echo $imgJugadas[$_SESSION['jugadaPlayer']]; ?>"/>
				</div>
				<div class="vs">
				<p>VS</p>
				</div>
				<div>
					<p class="title">PC</p>
					<img class="botonSeleccion" src="<?php echo $imgJugadas[$_SESSION['jugadaPC']]; ?>"/>
				</div>
				<div class="clear"></div>
				 <?php if($_SESSION['resultado']==0){ ?>
					<p>Ud ha empatado el juego</p>
				<?php }else if($_SESSION['resultado']==1){ 
					$_SESSION['dinero']=$_SESSION['dinero']+5; ?>
					<p>Ud ha ganado el juego</p>
				<?php }else{ ?>
					<p>Ud ha perdido el juego</p>

				<?php } ?>
				<div class="clear"></div>
				<p>Su saldo ahora es de S/.<?php echo $_SESSION['dinero']?></p>
		<?php } 
		} ?>
		<div class="clear"></div>
		<a href="index.php">Volver a jugar</a>
	</div>
</body>

</html>