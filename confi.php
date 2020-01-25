<?php
	
	$autoload =  function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);


	define('HOST', 'localhost');
	define('DATABASE','blog');
	define('USER', 'root');
	define('PASSWORD', '');
?>