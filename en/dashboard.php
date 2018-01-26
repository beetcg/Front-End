<?php 
	session_start(); 
	if (isset($_COOKIE['email'])) {
?>
<!DOCTYPE html>
<html lang="en-US" data-ng-app="beetApp" data-ng-cloak>
<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dashboard - BEET</title>
    <meta name="description" content="Spiral HTML5 premium template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C300%2C700%7CRaleway%3A400%2C200%2C600%2C700&amp;ver=4.2.6"
          type="text/css" media="all">
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/icons/icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/core-icons/core_style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/scripts.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/ionicons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <style>
        div > p {
            cursor: pointer;
        }

        li h3:hover {
            color: #821e3b !important;
            font-weight: bold;
        }
    </style>

</head>
<body class="page" data-ng-controller="dashboardController">
	<div ng-include="'menu-bar.php'"></div>

	<?php 
		if ($_COOKIE['type'] == 'tech' || $_SESSION['type'] == 'tech' ) {
			$type = "Technician ";
		} else {
			$type = '';
		}
	?>

	<div class="container" >
		<div class="row my-5">
			<div class="col-md-6 offset-md-3 my-2">
				<h1 class="text-center" style="color: #000;">Wellcome</h1>
    		<h2 class="text-center" style="color: #000;">
    			<?php echo $type.$_SESSION['fname']." ".$_SESSION['lname'];?>
    			<br>
					<small><?php echo $_SESSION['email'];?></small>
    		</h2>
				 
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	        crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
	        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
	        crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="../js/angular/angular.min.js"></script>
	<script type="text/javascript" src="../js/angular/app.js"></script>
	<script type="text/javascript" src="../js/fileinput.js"></script>
	<script src="./../src/app_api/modules/technician/controller.js"></script>
	<script src="./../src/app_api/modules/client/controller.js"></script>

</body>
</html>
<?php 
	} else { // Fin del if
		header('Location: http://comiczone.hol.es');
	}
?>
