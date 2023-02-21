<?php

//include_once('../model.php');  // step 1  load mopdel 

class control // step 2 extends model
{
	
	function __construct()
	{
		session_start();
		//model::__construct(); // step 3 call model __construct();
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/':
			include_once('index.php');
			break;
			
			case '/index':
			include_once('index.php');
			break;
			
			case '/about-us':
			include_once('about-us.php');
			break;
			
			case '/feature':
			include_once('feature.php');
			break;
						
			case '/detail':
			include_once('detail.php');
			break;
			
			case '/service':
			include_once('service.php');
			break;
			
			case '/contact-us':
			include_once('contact-us.php');
			break;
		
		}
	}
	
}
$obj=new control;
?>