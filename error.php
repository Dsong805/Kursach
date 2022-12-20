<?php $error = $_GET["error"] ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include('styles.html') ?>
</head>
<body class="center">

	<?php include("header.php") ?>

	<main class="center-block pa text-center">
		<?php if ($error == 1): ?>
			<div class="info">
				<h1>Такой пользователь существует!</h1>
				<a href="/login.php?login=1" class="btn btn-primary me-2">Назад</a>
			</div>
		<?php elseif ($error == 2): ?>
			<div class="info">
				<h1>Такой пользователь не существует!</h1>
				<a href="/login.php?login=2" class="btn btn-primary me-2">Назад</a>
			</div>
		<?php elseif ($error == 3): ?>
			<div class="info">
				<h1>Не правильный пароль!</h1>
				<a href="/login.php?login=2" class="btn btn-primary me-2">Назад</a>
			</div>
		<?php endif; ?>
	</main>
	
</body>
</html>