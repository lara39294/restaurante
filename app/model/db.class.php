<?php
/**
 * 
 */
class BasedeDatos{
	protected $conexion;
	protected $isConnected=false;

	public function conectar(){
		// code...
		$this->conexion=new mysqli("localhost","root","","pedidos");
		if ($this->conexion->connect_errno){
			echo "Error de Conexion:{$this->conexion->connect_error}";
			$this->isConnected=false;
		}else{
			$this->isConnected=true;
		}
		return$this->isConnected;
	}

	public function executeQuery($query){
		$result=$this->conexion->query($query);
		$records=array();
		while ($record=$result->fetch_assoc()){
			$records[]=$record;
		}
		return $records;
	}

	public function excuteInsert($query){
		$result=$this->conexion->query($query);
		return $this->conexion->insert_id;
	}

	public function excuteUpdate($query){
		$result=$this->conexion->query($query);
		return true;
	}
}
?>