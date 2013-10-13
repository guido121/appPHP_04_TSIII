<?php	
	session_start();
	$_SESSION['jugadaPlayer']=$_GET['jugada'];
	$_SESSION['jugadaPC']=rand(0,2);
	$_SESSION['dinero']=$_SESSION['dinero']-2;

	$_SESSION['resultado']=definirGanador($_SESSION['jugadaPlayer'],$_SESSION['jugadaPC']);
	//Tijera  0
	//Piedra  1
	//Papel   2
	function definirGanador($jugada1,$jugada2){
		$resultado=0;
		if(($jugada1==2 && $jugada2==0)){
			$resultado= 2;
		}else 
		if(($jugada1==0 && $jugada2==2)){
			$resultado= 1;
		}else
		if($jugada1<$jugada2){
			$resultado=2;
		}else if($jugada1>$jugada2){
			$resultado=1;
		}else{
			$resultado=0;
		}
	return $resultado;
	}

	header('location:resultado.php');
?>