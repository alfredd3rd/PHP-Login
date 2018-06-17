<?php 
	//allow the config
	define('__CONFIG__',true);
	//require the config
	require("/../inc/config.php");
	
	
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		header('Content-Type: application/json');

		$array = [];  

		//Make sure the user does not exist.

		 //Make sure the user CAN be added AND is added

		//Return the proper information back to javascript to redirect us

		$array['redirect'] = 'index.php?this-was-a-redirect';


		echo json_encode($array, JSON_PRETTY_PRINT);exit;

	}else{
		exit('test');
	}

	
?>
