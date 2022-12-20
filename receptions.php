<?php
	$receptions = True;  
	$doctor = $_GET["doctor"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("styles.html") ?>
</head>
<body class="center">


	<div class="widther">
		<?php include("header.php") ?>
	</div>

	<?php $doctors = $db->get_doctors(); ?>


	<div class="left-side-menu">
		<h4 class="text-center">Врачи</h4>
		<div class="center-block">
			<div class="container">
				<?php foreach ($doctors as $doctor_): ?>
					<a href="/receptions.php?doctor=<?php echo $doctor_[0] ?>" class="btn btn-outline-primary me-2 w-100 doctors"><?php echo $doctor_[1] ?></a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<main class="widther h-100 center-block pa text-center calc-w">
		<div class="container-fluid <?php if ($doctor != 0){echo 'container-500';} ?>">
			<?php if (!$auth):?>
				<h1>Для начала авторизуйтесь!</h1>
			<?php else: ?>
				<?php if ($doctor == "receipt"): ?>
					<?php include("img/doctor.svg") ?>
					<h2>Спасибо за запись!</h2>
				<?php elseif ($doctor == 0): ?>
					<h1>Выберите нужного вам стоматолога в меню слева!</h1>


				<?php else: ?>
					<?php $doctor_info = $db->get_doctor_info($doctor); ?>
					<h3>Запись к <?php echo $doctor_info["name"]; ?> </h3>
					<form action="/acts/add_note.php" class="mt-3" method="post">
						<h6 style="text-align: left;">Выберите время записи</h6>
						<input value="<?php echo $user_info["id"]; ?>" required name="user_id" type="text" class="hide-input">
						<input value="<?php echo $doctor_info["id"]; ?>" required name="doctor_id" type="text" class="hide-input">
						<input required name="date" type="date" class="form-control">
						<button type="submit" class="btn btn-primary me-2 w-100">Записаться</button>
					</form>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</main>


	<!-- <div class="widther">
		<?php include("footer.php") ?>
	</div> -->
	
</body>
</html>