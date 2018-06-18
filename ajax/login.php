<?php 
	//allow the config
	define('__CONFIG__',true);
	//require the config
	require("../inc/config.php");
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		header('Content-Type: application/json');
		$array = [];  
		$email = Filter::String($_POST['email']);
		$password = $_POST['password'];
		//Make sure the user does not exist.
		$findUser = $con->prepare("SELECT user_id,password FROM users WHERE email=:email LIMIT 1");
		$findUser->bindParam(':email',$email,PDO::PARAM_STR);
		$findUser->execute(); 

		if($findUser->rowCount()==1){
			$User=$findUser->fetch(PDO::FETCH_ASSOC);
			$user_id = (int) $User['user_id'];
			$hash = (string) $User['password'];

			if(password_verify($password,$hash)){
				$array['redirect'] = 'dashboard.php';

				$_SESSION['user_id']= $user_id;

			}else{
				$array['error'] = "Invalid user email/password combo";
			}



		}else{
			//they need to create a new account
			$array['error'] = "You do not have an account. <a href='/register.php'> Create one now?</a>";
		}
		echo json_encode($array, JSON_PRETTY_PRINT);exit;

	}else{
		exit('test');
	}

	
?>
