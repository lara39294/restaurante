<?php
include_once "app/model/productosmodel.php";
class ProductosController extends Controller{
	private $product;
	public function __construct($param){
		// code...
		$this->product=new Productos();
		parent::__construct("productos",$param,true);

	}

	public function getAll(){
		$records = $this->product->getAll();
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

		if ($_POST["id_producto"] == "0") {
			if (count($this->product->getUserByName($_POST["nombre"])) > 0) {
				$info = array( 'success' => false, 'msg' => "el registro ya existe" );
			} else {
				$records = $this->product->save($_POST, $img);
				$info    = array( 'success' => true, 'msg' => "El Registro Fue Guardado Con Exito" );
			}
		}else{
			if (count($this->product->getUserByNameAndId($_POST["nombre"],$_POST["id_producto"])) > 0) {
				$info = array( 'success' => false, 'msg' => "el registro ya existe" );
			} else {
				$records = $this->product->Update($_POST, $img);
				$info    = array( 'success' => true, 'msg' => "El Registro Fue Guardado Con Exito" );
			}
		}
		echo json_encode($info);
	}

	public function getOneProduct(){
		$records=$this->product->getOneProduct($_GET["id"]);
		if (count($records)>0) {
			$info=array('success'=>true, 'records'=>$records);
		} else {
			$info=array('success'=>false, 'msg'=>"El restaurante no existe");
		}
		echo json_encode($info);	

	}
	
	public function deleteProduct(){
		$records=$this->product->deleteRest($_GET["id"]);
		$info=array('success'=>true, 'msg'=>"Restaurante Eliminado con Exito");
		echo json_encode($info);
	}
}

?>