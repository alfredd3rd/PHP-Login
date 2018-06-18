<?php 
	//allow the config
	define('__CONFIG__',true);
	//require the config
	require("inc/config.php");
	
	echo $_SESSION['user_id'].' is you id';
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



</div>

<?php require_once "inc/footer.php" ?>

</body>
</html>