<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Личный кабинет</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/styleAdmin.css">
</head>
	<?php
		require_once "db/Lk.php";
		$data = getData();
	?>
	<?php
		if($_COOKIE['user'] != ''):
	?>
<body class="orange lighten-4" >
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light brown scrolling-navbar">
			<div class="container-fluid">
				<a href="#" class="navbar-brand waves-effect"><strong class="white-text">Панель администратора</strong></a>
			</div>
		</nav>
		<div class="sidebar-fixed position-fixed">
			<a href="#" class="logo-wrapper waves-effect">
				<img src="img/logo.jpg" alt="" class="img-fluid">
			</a>
			<div class="list-group list-group-flush">
				<a href="indexAdmin.php" class="list-group-item waves-effect">
					Dashboard
				</a>
			</div>
			<div class="list-group list-group-flush">
				<a href="adminUsers.php" class="list-group-item waves-effect">
					Пользователи
				</a>
			</div>
			<div class="list-group list-group-flush">
				<a href="#" class="list-group-item  active orange waves-effect">
					Личный кабинет
				</a>
			</div>
			<div class="list-group list-group-flush">
				<a href="db/exit.php" class="btnExit waves-effect">
					Выход
				</a>
			</div>
		</div>
	</header>
	<main class="pt-5 max-lg-5">
		<div class="container-fluid mt-5">
			<div class="card mb-4 wow fadeIn">
				<div class="card-body d-sm-flex justify-content-between">
					<h4 class="mb-2 mb-sm-0 pt-1">
						<span>Личный кабинет</span>
					</h4>
				</div>
			</div>
			<form action="db/LkUpAdmin.php" method="post">
				<div class="row wow fadeIn">
					<div class="col-md-12 mb-4">
						<div class="card">
							<div class="card-body">
								<?php
									for ($i = 0; $i < count($data); $i++){
									echo '
								<div class="form-group">
									<big><big>'.$data[$i]["fio"].'</big></big>
								</div>
								<br>
								<div class="form-group">
									<p>E-mail: '.$data[$i]["email"].'</p>
									<input type="text" class="form-control" name ="email" id="email" placeholder="Новый E-mail">
								</div>
								<div class="form-group">
									<p>Логин: '.$data[$i]["login"].'</p>
									<input type="text" class="form-control" name ="login" id="login" placeholder="Новый логин">
								</div>
								<div class="form-group">
									<p>Пароль:</p>
									<input type="text" class="form-control" name ="password" id="password" placeholder="Новый пароль">
								</div>';
									}
								?>
								<div>
									<br><br><a href="db/exit.php" class="btnUpdate waves-effect">
										Сохранить
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</main>
	<?php else: ?>
		<meta http-equiv="refresh" content="0; url=index.php">
	<?php endif;?>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript"></script>
</body>
</html>
