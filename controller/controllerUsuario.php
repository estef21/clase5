
<?php 
	
	class controllerUsuario
	{
		private $obj;

		function __construct()
		{
			include"view/viewusuarios.php";
			$this->obj=new viewusuarios();
		}
		
		
		private function index()
		{
			$this->obj->page("Agenda 2019: Inicio","Inicio","view/html/nuevo.html");
		}

		private function nosotros()
		{
			$this->obj->page("Agenda 2019: Nosotros","Nosotros","view/html/lista.html");

		}
		private function salir(){
			$this->obj->page("Cierre de sesion","sesion finalizada");

		}

		public function ruteador(){
			extract($_GET);

			if(isset($nosotros))
			{
				$this->nosotros();
			}else if (isset($salir))
			{
				$this->salir();
			}else
			{
				$this->index();
			}
		}

	}


 ?>