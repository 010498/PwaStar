<?php 

	class HomeModel extends Pgsql
	{
		private $strusuario;
		private $strpassword;

		public function __construct()
		{
			parent::__construct();
		}

		public function inisession(string $usuario, string $password)
		{

			$this->strusuario = $usuario;
			$this->strpassword = $password;

			$query_select = "SELECT id_cliente, nombre, usuario, pass, estado, cl_temp, cedula 
   							 FROM clientes 
   							 WHERE usuario = '$this->strusuario' AND pass = '$this->strpassword' ";
   							 

            $request = $this->select($query_select);
            return $request;
		}
	}

?> 