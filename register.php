
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
	<div class="uk-grid uk-child-width"></div>

	<form class="js-register">

	    <div class="uk-margin">
	        <div class="uk-inline">
	            <span class="uk-form-icon" uk-icon="icon: user"></span>
	            <input placeholder="Username" class="uk-input" type="email">
	        </div>
	    </div>

	    <div class="uk-margin">
	        <div class="uk-inline">
	            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
	            <input placeholder="Password" class="uk-input" type="password">
	        </div>
	    </div>

	<div style="display:none"class="uk-margin uk-alert uk-alert-danger js-error">
		test
	</div>
	    <div class="uk-margin">
	        <button class="uk-button uk-button-default">Register </button>
	    </div>

	</form>

</div>
<?php 
require_once "inc/footer.php" 


?>
</body>
</html>