<?php 
	include_once "Automovel.php";
	include_once "Cambio.php";
	include_once "Manual.php";

	$cambio = new Cambio(1);
	$automovel = new Automovel($cambio, True);

	echo $cambio->marcha;

	//$automovel->AumentarMarcha();

	switch ($cambio) {
		case 1:
			echo "acelera porra";
			break;
		case 2:
			echo "mais ou menos, vai mais";	
			break;
		default:
			// code...
			break;
	}

?>