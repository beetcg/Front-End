<?php session_start(); 
if (isset($_COOKIE['email'])) {
?>
<!DOCTYPE html>
<html lang="en-US" data-ng-app="beetApp">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>BEET | WELCOME</title>
  <meta name="description" content="Beet ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<script src="https://use.fontawesome.com/e7cf633633.js"></script>
</head>
<body>
	<div ng-include="'menu-bar.php'"></div>

	<?php 
		if ($_SESSION['type'] == 'tech') {
			$type = "Technician ";
		} else {
			$type = '';
		}
	?>

	<div class="container">
		<div class="row my-5">
			<div class="col-md-6 offset-md-3 my-2">
				<h1 class="text-center">Wellcome</h1>
    		<h2 class="text-center">
    			<?php echo $type.$_SESSION['fname']." ".$_SESSION['lname'];?>
    			<br>
					<small><?php echo $_SESSION['email'];?></small>
    		</h2>
				 
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="./../src/app_api/modules/client/controller.js"></script>
	<script src="./../src/app_api/modules/technician/controller.js"></script>

</body>
</html>
<?php 
	} else { // Fin del if
		header('Location: http://comiczone.hol.es');
	}
?>
