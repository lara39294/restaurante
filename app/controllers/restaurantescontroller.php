<?php
include_once "app/model/restaurantesmodel.php";
class RestaurantesController extends Controller{
	private $rest;
	public function __construct($param){
		// code...
		$this->rest=new Restaurantes();
		parent::__construct("restaurantes",$param,true);

	}

	public function getAll(){
		$records = $this->rest->getAll();
		$info    = array( 'success' => true, 'records' => $records );
		echo json_encode($info);
	}

	public function save()
	{
		$img = "";
		if (isset($_FILES["foto"])) {
			if (is_uploaded_file($_FILES["foto"]["tmp_name"])) {
				if (($_FILES["foto"]["type"] == "img/png") || ($_FILES["foto"]["type"] == "img/jpeg")) {

					copy($_FILES["foto"]["tmp_name"], __DIR__ . "/../../public_html/fotos/" . $_FILES["foto"]["name"]) or die("no se pudo guardar el archivo");
					$img = URL . "public_html/fotos/" . $_FILES["foto"]["name"];
				} else {
					$img = "";
				}
			}
		}

		if ($_POST["id_restaurantes"] == "0") {
			if (count($this->rest->getUserByName($_POST["nombres"])) > 0) {
				$info = array( 'success' => false, 'msg' => "el registro ya existe" );
			} else {
				$records = $this->rest->save($_POST, $img);
				$info    = array( 'success' => true, 'msg' => "El Registro Fue Guardado Con Exito" );
			}
		}else{
			if (count($this->rest->getUserByNameAndId($_POST["nombres"],$_POST["id_restaurantes"])) > 0) {
				$info = array( 'success' => false, 'msg' => "el registro ya existe" );
			} else {
				$records = $this->rest->Update($_POST, $img);
				$info    = array( 'success' => true, 'msg' => "El Registro Fue Guardado Con Exito" );
			}
		}
		echo json_encode($info);
	}

	public function getOneRest(){
		$records=$this->rest->getOneRest($_GET["id"]);
		if (count($records)>0) {
			$info=array('success'=>true, 'records'=>$records);
		} else {
			$info=array('success'=>false, 'msg'=>"El restaurante no existe");
		}
		echo json_encode($info);	

	}
	
	public function deleteRest(){
		$records=$this->rest->deleteRest($_GET["id"]);
		$info=array('success'=>true, 'msg'=>"Restaurante Eliminado con Exito");
		echo json_encode($info);
	}
}

?>