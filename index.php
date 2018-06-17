<?php 
	//allow the config
	define('__CONFIG__',true);
	//require the config
	require("inc/config.php");
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/css/uikit.min.css" />

</head>
<body>


<div class=".uk-section.uk-container uk-text-center">
	<?php 

	echo "Today is: ";
	echo date("Y m d");

	?>
	</form>
	<p>
		<a href="login.php">Login</a>
		<a href="register.php">Register</a>
	</p>

</div>

<?php require_once "inc/footer.php" ?>

</body>
</html>