<?php $login = $_GET['login'] ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("styles.html") ?>
</head>
<body class="center">

	<?php include("header.php") ?>


	<main class="pa center-block">
		<div class="container container-500">
			<?php if ($login == 1): ?>
				<h3>Регистрация</h3>
				<form action="acts/register.php" method="post">
					<input name="first_name" required type="text" placeholder="Имя" class="form-control">
					<input name="last_name" required type="text" placeholder="Фамилия" class="form-control">
					<input name="email" required type="text" placeholder="Почта" class="form-control">
					<input name="password" required type="text" placeholder="Пароль" class="form-control">
					<button type="submit" class="btn btn-outline-primary me-2 w-100">Зарегестрироваться</button>
				</form>
			<?php else: ?>
				<h3>Войти</h3>
				<form action="acts/login.php" method="post">
					<input name="email" required type="text" placeholder="Почта" class="form-control">
					<input name="password" required type="text" placeholder="Пароль" class="form-control">
					<button type="submit" class="btn btn-outline-primary me-2 w-100">Зарегистрироваться</button>
					<a href="/login.php?login=1">Зарегистрироваться</a>
				</form>

			<?php endif; ?>
		</div>
	</main>


</body>
</html>