<?php 

	function ForceLogin(){

	if(isset($_SESSION['user_id'])){

	}else{
		header("Location:login.php");exit;
	}
	
	}

	function forceDashboard(){
		if(isset($_SESSION['user_id'])){
			header("Location:dashboard.php");exit;
		}else{
			
		}

	}




?>