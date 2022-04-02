<?php 

	class Monitoreo extends Controllers
	{
		public function __construct()
		{
			parent::__construct();
			session_start();
			if(empty($_SESSION['login'])){
				header('Location: '.base_url());
			}
		}


		public function monitoreo()
		{
			$data['page_tag'] = "Monitoreo";
			$data['page_title'] = "Monitoreo";
			// $data['page_function_js'] = "function_login.js";
			$this->views->getView($this,"monitoreo",$data);
		}
	}


 ?>