<?php
	spl_autoload_register('autoload');

	function autoload(string $className){
		$classFolder = "/classes";
		$ext = ".class.php";
		$path = $class_folder . $className . $ext;
		include_once($path);
	}

