<?php

	class View{
		
		function render($view){
			require "app/view/$view.php";
		}
	}

?>