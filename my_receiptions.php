<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("styles.html") ?>
</head>
<body>

	<?php include("header.php") ?>

	<?php $receptions = $db->my_receptions($user_info["id"]) ?>


	<main class="container">
		<?php foreach($receptions as $rec): ?>
			<?php $doctor_info = $db->get_doctor_info($rec[2]) ?>
			<div class="receiption">
				<h1>Запись к <?php echo $doctor_info['name'] ?></h1>
				<h4>Дата: <?php echo $rec[3] ?></h4>
			</div>
		<?php endforeach; ?>
	</main>



	<?php include("footer.php") ?>

</body>
</html>