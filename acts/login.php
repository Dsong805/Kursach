<?php 

	$email = $_POST['email'];
	$password = $_POST['password'];

	include("../db/db.php");
	$db = new MySQlither();

	$exists_user = $db->exists_user($email);

	if(!$exists_user){
		header("Location: /error.php?error=2");
		exit();
	}
	else{
		if ($exists_user["password"] == $password){
			setcookie("email", $email, time()+3600*24, "/");
			header("Location: /");
		}
		else{
			header("Location: /error.php?error=3");
			exit();
		}
	}


?>