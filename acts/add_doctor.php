<?php 
	
	$doctor_name = $_POST['doctor_name'];


	include("../db/db.php");
	$db = new MySQlither();


	$db->add_doctor($doctor_name);
	header("Location: /add_doctors.php?add=1");


?>