<?php 
	//allow the config
	define('__CONFIG__',true);
	//require the config
	require("../inc/config.php");
	
	
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		header('Content-Type: application/json');

		$array = [];  

		$email = Filter::String($_POST['email']);

		$user_found = User::Find($email);

		//Make sure the user does not exist.

		if($user_found){
			$array['error'] = "You already have an account";
			$array['is_logged_in'] = false;
		}else{


			$password=password_hash($_POST['password'],PASSWORD_DEFAULT);



			$addUser=$con->prepare("INSERT INTO users (email,password) VALUES(:email, :password)");
			$addUser->bindParam(':email',$email, PDO::PARAM_STR);
			$addUser->bindParam(':password',$password, PDO::PARAM_STR);
			$addUser->execute();

			$user_id = $con->lastInsertId();
			$_SESSION['user_id'] = (int) $user_id;
			//$array['redirect'] = 'index.php?this-was-a-redirect';
			$array['is_logged_in'] = true;
			$array['redirect'] = 'dashboard.php';

		}

		 //Make sure the user CAN be added AND is added

		//Return the proper information back to javascript to redirect us

		


		echo json_encode($array, JSON_PRETTY_PRINT);exit;

	}else{
		exit('test');
	}

	
?>
