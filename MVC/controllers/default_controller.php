<?php


class default_controller
{
	function __construct()
	{
		
	}

	function display($name, $param)
	{
		
		include_once dirname(__DIR__).'/views/'.$name.'.php';
	}	
}