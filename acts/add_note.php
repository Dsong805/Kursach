<?php 
	
	$user_id = $_POST['user_id'];
	$doctor_id = $_POST["doctor_id"];
	$date = $_POST["date"];

	$correct_date = date("Y-m-d" ,strtotime($date));

	include("../db/db.php");
	$db = new MySQlither();

	$db->add_note($user_id, $doctor_id, $date);

	header("Location: /receptions.php?doctor=receipt");

?>