<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>Мои резюме</title>
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<?php
		require_once "db/showVac.php";
		$vacancies = getVac();
	?>
  </head>
  	<?php
		if($_COOKIE['user'] != ''):
	?>
  <body class="nav-on-header bg-alt">
    <nav class="navbar">
      <div class="container">
        <div class="pull-left">
          <div class="logo-wrapper">
            <a class="logo-alt" href="#"><img src="img/logo.jpg" alt="logo-alt"></a>
          </div>
        </div>
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="db/exit.php">Выйти</a>
        </div>
        <ul class="nav-menu">
          <li>
            <a class="active" href="indexHirer">Главная</a>
          </li>
          <li>
            <a href="#">Вакансии</a>
            <ul>
              <li><a href="createVac.php">Создать вакансию</a></li>
              <li><a href="myVac.php">Мои вакансии</a></li>
            </ul>
          </li>
		  <li>
            <a href="LkHirer.php">Личный кабинет</a>
          </li>
		</ul>
      </div>
    </nav>
    <header class="page-header-resume bg-img size-lg" style="background-image: url(img/banner.jpg)">
      <div class="container-resume no-shadow-resume">
        <h1 class="text-center">Мои вакансии</h1>
      </div>
    </header>
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
				<?php
				for ($i = 0; $i < count($vacancies); $i++){
					echo '<div class="item-block">
						<header>
							<a href="#"><img class="resume-avatar" src="img/logo.png" alt=""></a>
								<div class="hgroup">
									<h4>'.$vacancies[$i]["name"].'</h4>
									<h5>'.$vacancies[$i]["description"].'</h5>
								</div>
								<div class="header-meta">
									<p>'.$vacancies[$i]["city"].'</p>
									<h5>'.$vacancies[$i]["salary"].'</h5>
								</div>
						</header>
						<footer>
						</footer>
					</div>	';
				}
		  ?>
            </div>			
			 <div class="col-xs-12 text-right">
              <br>
              <a class="btn btn-primary btn-sm" href="createVac.php">Создать</a>
			  <a class="btn btn-primary btn-sm" href="db/delVac.php">Удалить все</a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>О нас</h6>
            <p class="text-justify">Этот сайт создан для поиска работы. Здесь Вы можете создать свое резюме и 
			просмотреть существующие вакансии. Для этого сначала необходимо авторизироваться.</p>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Сделано в качестве курсового проекта.</p>
          </div>
        </div>
      </div>
    </footer>
    <a id="scroll-up" href="#">^</a>
	<?php else: ?>
		<meta http-equiv="refresh" content="0; url=index.php">
	<?php endif;?>
    <script src="js/app.min.js"></script>
  </body>
</html>
