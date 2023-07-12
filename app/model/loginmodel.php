<?php
include_once "app/model/db.class.php";

	class Login extends BasedeDatos{
		
		public function __construct(){
			parent::conectar();
		}

		public function validarLogin($user,$pass){
			$result=$this->conexion->query("Select * from usuarios where usuario='$user' and password=md5('$pass')");
			if ($record=$result->fetch_assoc()) {
				return $record;
			} else {
				return false;
			}
			
		}
	}


?>