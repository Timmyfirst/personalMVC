<?php
	include_once '../MVC/configs/config.php';
	
	//var_dump($page[3]);
	
	define( 'DS', DIRECTORY_SEPARATOR );
	define( 'views', join( DS, array(dirname(__DIR__), 'MVC/views')) );
	define( 'controllers', join( DS, array(dirname(__DIR__), 'MVC/controllers')) );

	include_once views.DS.'head.php';

	if(file_exists(controllers.DS.$page.'_controller.php'))
	{
		include_once controllers.DS.'default_controller.php';	
		include_once controllers.DS.$page.'_controller.php';		
		$a = new contact_controller();
	}else
	{
		echo $error='Pas de controller';
	}




include_once views.DS.'footer.php';
?>