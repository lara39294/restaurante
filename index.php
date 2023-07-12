<?php
define('URL', '/restaurante/');
require_once "app/controllers/errorescontroller.php";
require_once "app/controllers/controller.php";

$url=$_GET["action"] ?? null;
$url=rtrim($url,'/');
$url=explode("/", $url);

if(empty($url[0])) {
	$archivoController="app/controllers/main";
	$url[0]="main";
} else {
	// code...
	$archivoController="app/controllers/{$url[0]}";
}
$archivoController.="controller.php";
if (file_exists($archivoController)) {
	// code...
	require $archivoController;
	$url[0].="Controller";
	$controller=new $url[0]($url[1] ?? "");
} else {
	// code...
	$controller=new ErroresController();
}


?>