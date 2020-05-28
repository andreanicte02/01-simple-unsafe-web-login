<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["islog"]) || $_SESSION["islog"] !== true){
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome page</title>
</head>
<body>
	<h2> welcome 
		<?php 
			echo $_SESSION['username'];
		?>
			
	</h2>

	  <a href="close_session.php" class="btn btn-danger">Cerrar session</a>

</body>
</html>