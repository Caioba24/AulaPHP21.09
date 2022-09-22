<?php  

	class Produto 
	{
		var $Codigo;
		var $Descricao;
		var $Preco;
		var $Quantidade;

		function ImprimeEtiqueta()
		{
			echo "codigo" . $this->Codigo . "<br/>";
			echo "descricao" . $this->Descricao . "<br><br>";
		}
	}

?>