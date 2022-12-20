<?php 

	if(!isset($_COOKIE['email'])){$auth = NULL;}else{$auth=$_COOKIE['email'];}

	include("db/db.php");
	$db = new MySQlither();

	if ($auth){
		$user_info = $db->get_user_info($_COOKIE["email"]);
	}

?>

<div class="container">
	<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
		<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
			<li><a href="/" class="nav-link px-2 <?php if(isset($index)){echo 'link-secondary';}else{echo 'link-dark';} ?>">Главная</a></li>
			<li><a href="/receptions.php?doctor=0" class="nav-link px-2 <?php if(isset($receptions)){echo 'link-secondary';}else{echo 'link-dark';}?>">Запись</a></li>
			<?php if($auth): ?>
				<li><a href="/my_receiptions.php" class="nav-link px-2 <?php if(isset($receptions)){echo 'link-secondary';}else{echo 'link-dark';}?>">Мои записи</a></li>
			<?php endif; ?>

		</ul>

		<div class="col-md-3 text-end">
			<?php if (!$auth): ?>
				<a href="/login.php?login=2" class="btn btn-outline-primary me-2">Войти</a>
			<?php else: ?>
				<a href="acts/relogin.php" class="btn btn-outline-primary me-2">Выйти</a>
			<?php endif; ?>
		</div>
	</header>
</div>