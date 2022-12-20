<?php 

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	include("../db/db.php");
	$db = new MySQlither();

	$exists_user = $db->exists_user($email);


	if ($exists_user){
		header("Location: /error.php?error=1");
	}
	else{
		$db->add_user($first_name, $last_name, $email, $password);
		setcookie("email", $email, time()+3600*24, "/");
		header("Location: /");
	}



?>