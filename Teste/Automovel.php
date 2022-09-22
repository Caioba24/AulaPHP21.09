<?php  
	
	include_once 'Cambio.php';
	include_once 'Manual.php';
	
	Class Automovel extends Manual
	{
	 private Cambio $cambio;

	 function __construct($cambio, $embreagem)
	 {
	 	parent::__construct($embreagem);
	 	$this->cambio = $cambio;
	 }
	 function aumentarMarcha()
	 {
	 	echo "eita poha kkkkkkkk ai sim hein, aumentou em paizao";
	 }

	}

?>