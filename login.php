<?php
	
	session_start();

	if(isset($_SESSION["islog"]) && $_SESSION["islog"] === true){
    	header("location: welcome.php");
    	exit;
	}

	//en este archivo estarian la conexion a la bd.. si tuviera una
	require_once "config.php";

	

	$userName = $_POST["strUserName"];
	$userPass = $_POST["strPassword"];

	//aca irian las validaciones de la base de datos
	if(strcmp($userName, "root")==!0 )
	{

		echo "error";
		//
		exit;
	}

	if(strcmp($userPass, "123")==!0)
	{

		echo "error";
	
		exit;
	}




		
	$_SESSION["islog"] = true;
	$_SESSION["username"] = $userName;

	header("location: welcome.php");


	
 

?>