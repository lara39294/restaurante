<?php
include_once "app/model/db.class.php";
class Usuarios extends BasedeDatos
{
    public function __construct()
    {
        parent::conectar();
    }

    public function getAll(){
        return $this->executeQuery("Select id_usuario, 
        nombres, apellidos, usuario, foto, if(tipo=1,'Administrador','Usuario') 
        as ntipo from usuarios order by id_usuario");
    }

    public function getUserByName($name){
        return $this->executeQuery("Select id_usuario, 
        nombres, apellidos, usuario, foto, if(tipo=1,'Administrador','Usuario') 
        as ntipo from usuarios where usuario='$name'");
    }
    public function getUserByNameAndId($name,$id){
        return $this->executeQuery("Select id_usuario, 
        nombres, apellidos, usuario, foto, if(tipo=1,'Administrador','Usuario') 
        as ntipo from usuarios where usuario='$name' and id_usuario<>'$id'");
    }


    public function save($data, $img){
        return $this->excuteInsert("insert into usuarios set usuario='{$data['usuario']}'
        ,password=md5('{$data['password']}'),nombres='{$data['nombres']}'
        ,apellidos='{$data['apellidos']}',tipo='{$data['tipo']}',foto='{$img}'");
    }

    public function getOneUser($id){
        return $this->executeQuery("Select id_usuario, 
        nombres, apellidos, usuario, foto, tipo from usuarios where id_usuario='$id'");
    }
    
    

    public function Update($data, $img){
        return $this->excuteUpdate("update usuarios set usuario='{$data['usuario']}'
        ,password=if('{$data['password']}'='',password,md5('{$data['password']}')),nombres='{$data['nombres']}'
        ,apellidos='{$data['apellidos']}',tipo='{$data['tipo']}',foto=if('{$img}'='',foto,'{$img}')
        where id_usuario='{$data['id_usuario']}'");
    }

    public function deleteUser($id){
		return $this->excuteUpdate("delete from usuarios where id_usuario='$id'");
	}
}


?>