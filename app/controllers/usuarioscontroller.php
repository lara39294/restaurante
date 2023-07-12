<?php
include_once "app/model/usuariosmodel.php";
class UsuariosController extends Controller
{
	private $user;

	public function __construct($param)
	{
		$this->user = new Usuarios();
		parent::__construct("usuarios", $param, true);
	}

	public function getAll()
	{
		$records = $this->user->getAll();
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

		if ($_POST["id_usuario"] == "0") {
			if (count($this->user->getUserByName($_POST["usuario"])) > 0) {
				$info = array( 'success' => false, 'msg' => "el registro ya existe" );
			} else {
				$records = $this->user->save($_POST, $img);
				$info    = array( 'success' => true, 'msg' => "El Registro Fue Guardado Con Exito" );
			}
		}else{
			if (count($this->user->getUserByNameAndId($_POST["usuario"],$_POST["id_usuario"])) > 0) {
				$info = array( 'success' => false, 'msg' => "el registro ya existe" );
			} else {
				$records = $this->user->Update($_POST, $img);
				$info    = array( 'success' => true, 'msg' => "El Registro Fue Guardado Con Exito" );
			}
		}
		echo json_encode($info);
	}

	public function getOneUser(){
		$records=$this->user->getOneUser($_GET["id"]);
		if (count($records)>0) {
			$info=array('success'=>true, 'records'=>$records);
		} else {
			$info=array('success'=>false, 'msg'=>"El usuario no existe");
		}
		echo json_encode($info);	

	}
	public function deleteUser(){
		$records=$this->user->deleteUser($_GET["id"]);
		$info=array('success'=>true, 'msg'=>"Usuario Eliminado con Exito");
		echo json_encode($info);
	}
}
?>