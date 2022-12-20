<?php if (isset($_GET['add'])){$add = True;}else{$add=False;} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("styles.html") ?>
</head>
<body class="center">

	<?php include("header.php") ?>


	<main class="center-block pa">
		<div class="container container-500 text-center">
			<?php if (!$add): ?>
				<form action="acts/add_doctor.php" method="post">
					<input name="doctor_name" required type="text" placeholder="Название врача" class="form-control">
					<button type="submit" class="btn btn-outline-primary me-2 w-100">Добавить</button>
				</form>
			<?php else: ?>
				<?php include("img/doctor.svg") ?>
				<h1>Доктор добавлен!</h1>
				<a href="/add_doctors.php" class="btn btn-outline-primary me-2">Добавить ещё</a>
			<?php endif; ?>


		</div>
		
	</main>
	
</body>
</html>