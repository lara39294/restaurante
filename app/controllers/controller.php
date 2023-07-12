<?php
	require_once "app/view/view.php";
	class Controller{
		// $this->view=new view();
		public $view;
		
		public function __construct($view, $param,$validar=false){
			$this->view=new view();

			if ($validar) {
				if(!isset($_SESSION)){
					session_start();
				}

				if(!isset($_SESSION["id_usuario"])){
					$this->view->render("login");
					exit(0);
				}
			} 
			

			if (empty($param)) {
				$this->view->render($view);
				return;
			}


			if (method_exists($this,$param)) {
				$this->$param();
			} else {
				 $this->view->render($view);
				
			}
			
		}
	}

?>