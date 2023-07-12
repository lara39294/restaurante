<?php

class MainController extends Controller{
	
	public function __construct($param){
		// code...
		parent::__construct("login",$param);
	}
}

?>