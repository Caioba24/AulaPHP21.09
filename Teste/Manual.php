<?php  

	Class Manual
	{
		private $embreagem;

		function __construct($embreagem)
		{
			$this->embreagem = $embreagem;
		}

		function pisarNaEmbreagem()
		{
			$this->embreagem = True;
		}

		function soltarEmbreagem()
		{
			$this->embreagem = False;
		}

		function acelerar($rpm)
		{
			++$rpm;
		}

	}

?>