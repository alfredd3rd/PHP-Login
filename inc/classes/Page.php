<?php 
if(!defined('__CONFIG__')){

		exit('You do not have a config file');
	}
class Page{
	static function ForceLogin(){

	if(isset($_SESSION['user_id'])){

	}else{
		header("Location:login.php");
	}
	
	}

	static function forceDashboard(){
		if(isset($_SESSION['user_id'])){
			header("Location:dashboard.php");exit;
		}else{

		}

	}


}




?>