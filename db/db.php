<?php 

	class MySQlither{
		public $db;

		function __construct(){
			$this->db = new mysqli("localhost", "root", "", "stomatology");
			mysqli_set_charset($this->db, 'utf8');
		}

		function exists_user($email){
			return $this->get_user_by_email($email);
		}

		function get_user_by_email($email){
			return $this->db->query("SELECT * FROM `patient` WHERE `email`='$email'")->fetch_assoc();
		}

		function add_user($first_name, $last_name, $email, $password){
			$this->db->query("INSERT INTO `patient` (`first_name`, `last_name`, `email`, `password`) VALUES('$first_name', '$last_name', '$email', '$password')");
		}

		function get_user_info($email){
			return $this->get_user_by_email($email);
		}

		function get_doctors(){
			return $this->db->query("SELECT * FROM `doctors`")->fetch_all();
		}

		function get_doctor_info($id){
			return $this->db->query("SELECT * FROM `doctors` WHERE `id`=$id")->fetch_assoc();
		}

		function add_note($user_id, $doctor_id, $date){
			$this->db->query("INSERT INTO `notes` (`patient_id`, `doctor_id`, `reception`) VALUES($user_id, $doctor_id, '$date')");
		}

		function add_doctor($doctor_name){
			$this->db->query("INSERT INTO `doctors` (`name`) VALUES('$doctor_name')");
		}

		function my_receptions($user_id){
			return $this->db->query("SELECT * FROM `notes` WHERE `patient_id`=$user_id")->fetch_all();
		}

	}


?>