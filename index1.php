<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>Dream Job</title>
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<?php
		require_once "db/forIndex.php";
		$vacancies = getVacancies (6);
		$countVacancies = getCountVacancies ();
		$countResume = getCountResume ();
		$avgVacancies = getAvgSalary ();
	?>
  </head>
	<?php
		if($_COOKIE['user'] != ''):
	?>
  <body class="nav-on-header">
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
            <a class="active" href="#">Главная</a>
          </li>
          <li>
            <a href="vacancies.php">Вакансии</a>
          </li>
          <li>
            <a href="#">Резюме</a>
            <ul>
              <li><a href="createResume.php">Создать резюме</a></li>
              <li><a href="myResume.php">Мои резюме</a></li>
            </ul>
          </li>
		</ul>
      </div>
    </nav>
    <header class="site-header size-lg text-center" style="background-image: url(img/banner.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>Найди свою работу мечты прямо сейчас!</h2>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Введите интересующую вакансию">
            </div>
            <div class="btn-search">
              <button class="btn btn-primary index_search" href="vacancies.php">Ищем!</button>
            </div>
          </form>
        </div>
		<div class="row">
            <div class="counter col-md-3 col-sm-6">
			<?php
			for ($i = 0; $i < count($countVacancies); $i++){
				echo '<p><span data-from="0" data-to="'.$countVacancies[$i]["COUNT( * )"].'"></span>+</p>
              <h6>Вакансий</h6>';
			}
		  ?>
            </div>
            <div class="counter col-md-3 col-sm-6">
			<?php
			for ($i = 0; $i < count($countResume); $i++){
				echo '<p><span data-from="0" data-to="'.$countResume[$i]["COUNT( * )"].'"></span>+</p>
              <h6>Резюме</h6>';
			}
		  ?>
            </div>
            <div class="counter col-md-3 col-sm-6">
			<?php
			for ($i = 0; $i < count($avgVacancies); $i++){
				echo '<p><span data-from="0" data-to="'.$avgVacancies[$i]["ROUND( AVG( salary ) , 0 )"].'"></span>рублей</p>
              <h6>Средняя зарплата</h6>';
			}
			?>
            </div>
          </div>
      </div>
    </header>
    <main>
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <h2>Популярные вакансии</h2>
          </header>
			<?php
			for ($i = 0; $i < count($vacancies); $i++){
				echo "<div class=\"category-grid\">";
				echo '<a href="#">
              <h6>'.$vacancies[$i]["name"].'</h6>
              <p>'.$vacancies[$i]["description"].'</p>
            </a>';
			}
		  ?>
        </div>
      </section>
      <section class="bg-img text-center" style="background-color: rgb(214, 128, 72)">
        <div class="container">
          <h2><strong>Начни поиск прямо сейчас!</strong></h2>
          <h6 class="font-alt">Вы авторизованы. Теперь можете перейти к созданию резюме и поиску подходящих вакансий</h6>
          <br><br>
          <form class="form-enter" action="#">
            <div class="input-group">
              <span class="input-group-btn">
                <a class="btn btn-sm btn-primary" href="db/exit.php">Выйти</a>
              </span>
            </div>
          </form>
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
