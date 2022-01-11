<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
	<title>Создать резюме</title>
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
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
            <a href="indexHirer.php">Главная</a>
          </li>
          <li>
            <a class="active" href="#">Вакансии</a>
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
    <form action="db/createNewVac.php" method="post">
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Создать вакансию</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-3">
              <div class="form-group">
                <input type="file" class="dropify" data-default-file="img/logo.png">
              </div>
            </div>

            <div class="col-xs-12 col-sm-9">
              <div class="form-group">
                <input type="text" class="form-control" name ="name" id="name" placeholder="Название вакансии">
              </div>

              <div class="form-group">
                <textarea class="form-control" rows="3" name ="description" id="description" placeholder="Описание вакансии"></textarea>
              </div>
              <h6><font color="black">Основная информация</font></h6>
              <div class="row">
                <div class="form-group col-xs-12 ">
                    <input type="text" class="form-control" name ="city" id="city" placeholder="Город">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="salary" id="salary" placeholder="Зарплата">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="organization" id="organization" placeholder="Название компании (без ковычек)">
                </div>
                
              </div>
			  <h6><font color="black">Условия</font></h6>
              <div class="row">
				<div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="schedule" id="schedule" placeholder="Занятость">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="expierence" id="expierence" placeholder="Опыт работы">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="category" id="category" placeholder="Категория">
                </div>
              </div>
        </div>		
      </header>
      <main>
		<div style='text-align:center'>
			<button class="btn btn-success btn-xl btn-round" style='color:#d68048'>Сохранить вакансию</button>
		</div>
      </main>
    </form>
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
