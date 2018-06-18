<?php 
	//allow the config
	define('__CONFIG__',true);
	//require the config
	require("inc/config.php");


	Page::ForceLogin();

	$User = new User($_SESSION['user_id']);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/css/uikit.min.css" />

</head>
<body>


<div class=".uk-section.uk-container uk-text-center">
	Dashboard

	<?php 

	echo "Today is: ";
	echo date("Y m d");

	?>
<p>Hello <?php echo $User->email ?>, you registered at <?php echo $User->reg_time; ?></p>

<a href="logout.php">Logout</a>
</div>

<?php require_once "inc/footer.php" ?>

</body>
</html>