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
		require_once "db/showResume.php";
		$resume = getResume();
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
            <a href="indexWorker.php">Главная</a>
          </li>
          <li>
            <a href="vacancies.php">Вакансии</a>
          </li>
          <li>
            <a class="active" href="#">Резюме</a>
            <ul>
              <li><a href="createResume.php">Создать резюме</a></li>
              <li><a href="myResume.php">Мои резюме</a></li>
            </ul>
          </li>
		  <li>
            <a href="LkWorker.php">Личный кабинет</a>
          </li>
		</ul>
      </div>
    </nav>
    <header class="page-header-resume bg-img size-lg" style="background-image: url(img/banner.jpg)">
      <div class="container-resume no-shadow-resume">
        <h1 class="text-center">Мои резюме</h1>
      </div>
    </header>
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
				<?php
				for ($i = 0; $i < count($resume); $i++){
					echo '<div class="item-block">
						<header>
							<a href="#"><img class="resume-avatar" src="img/avatar.png" alt=""></a>
								<div class="hgroup">
									<h4>'.$resume[$i]["fio"].'</h4>
									<h5>'.$resume[$i]["vacancy_title"].'</h5>
								</div>
								<div class="header-meta">
									<p>'.$resume[$i]["city"].'</p>
									<h5>'.$resume[$i]["salary"].'</h5>
								</div>
						</header>
						<footer>
							<p class="status"><strong>Создано:</strong> '.$resume[$i]["date"].'</p>
							<div class="action-btn">
								<a class="btn-action" href="updateResume.php">Редактировать</a>
								<a class="btn-action" href="printPage.php">Печать</a>
							</div>
						</footer>
					</div>	';
				}
		  ?>
            </div>			
			 <div class="col-xs-12 text-right">
              <br>
              <a class="btn btn-primary btn-sm" href="createResume.php">Создать</a>
			  <a class="btn btn-primary btn-sm" href="db/del.php">Удалить все</a>
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
