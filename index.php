<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>White Bridge Boarding Kennels - High Bickington, Devon</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- <link href="http://whitebridge.ozzydog.co.uk/contact-form/custom.css" rel="stylesheet"> -->
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<?php  
			include 'includes/navigation.php';
	 
			// Set the default name 
			$page = 'home'; 
			// Specify some disallowed paths 
			$disallowed_paths = array('header', 'footer'); 
			if (!empty($_GET['page'])) { 
			    $tmp_page = basename($_GET['page']); 
			    // If it's not a disallowed path, and if the file exists, update $page 
			    if (!in_array($tmp_page, $disallowed_paths) && file_exists("includes/{$tmp_page}.php")) 
			        $page = $tmp_page; 
			} 
			// Include $page 
			include("includes/$page.php"); 
	
			include 'includes/footer.php';
		?>

		<?php 
			function echoActiveClassIfRequestMatches($requestUri)
			{
			    $current_file_name = basename($_SERVER['REQUEST_URI']);

			    if ($current_file_name == $requestUri)
			        echo 'class="active"';
			}
		?>
		
		<!-- Javascript plugins -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/carouFredSel.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/ekkoLightbox.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCegd7FwEL23TPEglCSHhSfKHhsnvayJHc&amp;language=en"></script>
		<script src="js/gmap3.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="http://whitebridge.ozzydog.co.uk/js/validator.js"></script>
        <script src="http://whitebridge.ozzydog.co.uk/js/contact.js"></script>

                      <script>
              new WOW().init();
              </script>
	</body>
</html>