<?php
include_once "app/model/db.class.php";

	class Restaurantes extends BasedeDatos{
		
		public function __construct(){
			parent::conectar();
		}

        public function getAll(){
            return $this->executeQuery("Select id_restaurantes, 
            nombre_restaurante, direccion, telefono,contacto, foto, fecha_ingreso from restaurantes
             order by id_restaurantes");
        }

        public function getUserByName($name){
            return $this->executeQuery("Select id_restaurantes, 
            nombre_restaurante,direccion,telefono , contacto, foto, fecha_ingreso
            from restaurantes where nombre_restaurante='$name'");
        }
        public function getUserByNameAndId($name,$id){
            return $this->executeQuery("Select id_restaurantes, 
            nombre_restaurante, direccion, telefono,contacto, foto, fecha_ingreso 
            from restaurantes where nombre_restaurante='$name' and id_restaurantes<>'$id'");
        }
    
    
        public function save($data, $img){
            return $this->excuteInsert("insert into restaurantes set nombre_restaurante='{$data['nombres']}'
            ,direccion='{$data['direccion']}',telefono='{$data['telefono']}'
            ,contacto='{$data['contacto']}',foto='{$img}',fecha_ingreso='{$data['fecha']}'");
        }
    
        public function getOneRest($id){
            return $this->executeQuery("Select id_restaurantes, 
            nombre_restaurante, direccion, telefono,contacto, foto,fecha_ingreso from restaurantes
             where id_restaurantes='$id'");
        }
        
        
    
        public function Update($data, $img){
            return $this->excuteUpdate("update restaurantes set nombre_restaurante='{$data['nombres']}'
            ,diereccion='{$data['direccion']}',telefono='{$data['telefono']}'
            ,contacto='{$data['contacto']}',foto='{$img}',fecha_ingreso='{$data['fecha']}')
            where id_restaurantes='{$data['id_restaurantes']}'");
        }
    
        public function deleteRest($id){
            return $this->excuteUpdate("delete from restaurantes where id_restaurantes='$id'");
        }
	}


?>