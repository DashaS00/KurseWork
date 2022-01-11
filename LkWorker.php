<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
	<title>Личный кабинет</title>
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
  </head>
  <?php
		require_once "db/Lk.php";
		$data = getData();
	?>
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
            <a href="#">Резюме</a>
            <ul>
              <li><a href="createResume.php">Создать резюме</a></li>
              <li><a href="myResume.php">Мои резюме</a></li>
            </ul>
          </li>
		  <li>
            <a class="active" href="Lk.php">Личный кабинет</a>
          </li>
		</ul>
      </div>
    </nav>
    <form action="db/LkUpWorker.php" method="post">
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Личный кабинет</h1>
        </div>
        <div class="container">
		<center>На данной странице Вы можете просмотреть свои личные данные и изменить некоторые из них при необходимости. В случае изменения данных необходимо заполнить все поля (даже те, которые остаются прежними)</center><br>
          <div class="row">
            <div class="col-xs-12 col-sm-3">
              <div class="form-group">
                <input type="file" class="dropify" data-default-file="img/avatar.png">
              </div>
            </div>
            <div class="col-xs-12 col-sm-5">
              <?php
				for ($i = 0; $i < count($data); $i++){
					echo '
			  <div class="form-group">
			  
			  <big><big>'.$data[$i]["fio"].'</big></big>
              </div>
			  <br>
              <div class="form-group">
			  <small>E-mail: '.$data[$i]["email"].'</small>
                <input type="text" class="form-control" name ="email" id="email" placeholder="Новый E-mail">
              </div>
			  <div class="form-group">
			  <small>Логин: '.$data[$i]["login"].'</small>
                <input type="text" class="form-control" name ="login" id="login" placeholder="Новый логин">
              </div>
			  <div class="form-group">
			  <small>Пароль:</small>
                <input type="text" class="form-control" name ="password" id="password" placeholder="Новый пароль">
              </div>';
				}
		  ?>
		  <br><div class="action-buttons">
              <div class="upload-button">
                <a class="pull-right" href="myResume.php">Мои резюме</a><br><br>
              </div>
            </div>
            </div>
          </div>
        </div>		
      </header>
      <main>
		<div style='text-align:center'>
			<button class="btn btn-success btn-xl btn-round" style='color:#d68048'>Сохранить</button>
		</div>
      </main>
    </form>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>О нас</h6>
            <p class="text-justify">Этот сайт создан для поиска работы. Здесь Вы можете создать свое резюме и подать заявку на интересующую Вас вакансию. Для этого сначала необходимо авторизироваться.</p>
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
