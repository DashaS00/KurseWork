<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Пользователи</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/styleAdmin.css">
  <?php
		require_once "db/showUsers.php";
		$users = getUsers (6);
	?>
</head>
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
				<a href="#" class="list-group-item  active orange waves-effect">
					Пользователи
				</a>
			</div>
			<div class="list-group list-group-flush">
				<a href="adminLk.php" class="list-group-item waves-effect">
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
						<span>Пользователи</span>
					</h4>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-12 mb-4">
					<div class="card">
						<div class="card-body">
							<table>
								<tbody>
									<tr>
										<th class="first">ФИО</th>
										<th class="first">E-mail</th>
										<th class="first">Логин</th>
									</tr>
									<?php
										for ($i = 0; $i < count($users); $i++){
										echo "<tr>";
										echo '<td>'.$users[$i]["fio"].'</td>
										<td>'.$users[$i]["email"].'</td>
										<td>'.$users[$i]["login"].'</td>
										';
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
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
