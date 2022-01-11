<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Панель администратора</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/styleAdmin.css">
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
				<a href="#" class="list-group-item active orange waves-effect">
					Dashboard
				</a>
			</div>
			<div class="list-group list-group-flush">
				<a href="adminUsers.php" class="list-group-item waves-effect">
					Пользователи
				</a>
			</div>
			<div class="list-group list-group-flush">
				<a href="adminLk.php" class="list-group-item waves-effect">
					Личный кабинет
				</a>
			</div>
		</div>
	</header>
	<main class="pt-5 max-lg-5">
		<div class="container-fluid mt-5">
			<div class="card mb-4 wow fadeIn">
				<div class="card-body d-sm-flex justify-content-between">
					<h4 class="mb-2 mb-sm-0 pt-1">
						<span>Dashboard</span>
					</h4>
					<form class="d-flex justify-content-center">
						<input type="search" class="form-control" placeholder="Поиск">
						<button class="btn btn-sm brown my-0 p" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-9 mb-4">
					<div class="card">
						<div class="card-body">
						<center>Количество вакансий популярных направлений</center>
							<canvas id="myChart"></canvas>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 mb-4">
					<div class="card  mb-2">
						<div class="card-body">
						<center>Количество резюме популярных направлений</center>
							<canvas id="pieChart"></canvas>
						</div>
					</div>
					<div class="card mt-4">
					<br><center>Колебания зарплаты</center>
						<div class="card-body">
							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-time-action waves-effect">
									IT
									<span class="badge badge-success badge-pill pull-right">21%<i class="fa fa-arrow-up ml-1"></i></span>
								</a>	
							</div>
							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-time-action waves-effect">
									Торговля
									<span class="badge badge-primary badge-pill pull-right">11%<i class="fa fa-arrow-up ml-1"></i></span>
								</a>	
							</div>
							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-time-action waves-effect">
									Туризм
									<span class="badge badge-danger badge-pill pull-right">5%<i class="fa fa-arrow-down ml-1"></i></span>
								</a>	
							</div>
							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-time-action waves-effect">
									Дизайн
									<span class="badge badge-success badge-pill pull-right">18%<i class="fa fa-arrow-up ml-1"></i></span>
								</a>	
							</div>
							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-time-action waves-effect">
									Образование
									<span class="badge badge-danger badge-pill pull-right">15%<i class="fa fa-arrow-down ml-1"></i></span>
								</a>	
							</div>
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
  <script> 
	new WOW().init();
  </script>
	<script> 
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["IT", "Торговля", "Туризм", "Дизайн", "Образование"],
				datasets: [{
					label: 'Количество',
					data: [26,15,13,22,17],
					backgroundColor: [
					'#FFA07A',
					'#AFEEEE',
					'#FFFACD',
					'#EEE8AA',
					'#D8BFD8'],
					borderColor: [
					'red',
					'blue',
					'yellow',
					'green',
					'purple'],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
		
		var ctxP = document.getElementById('pieChart').getContext('2d');
		var myPieChart = new Chart(ctxP, {
			type: 'pie',
			data: {
				datasets: [{
					data: [280,167,104,250,97],
					backgroundColor: [
					'#FFA07A',
					'#AFEEEE',
					'#FFFACD',
					'#EEE8AA',
					'#D8BFD8'],
					hoverBackgroundColor: [
					'red',
					'blue',
					'yellow',
					'green',
					'purple'],
				}]
			},
			options: {
				responsive: true
			}
		});
  </script>
</body>
</html>
