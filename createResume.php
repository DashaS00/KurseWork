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
            <a href="index1.php">Главная</a>
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
		</ul>
      </div>
    </nav>
    <form action="db/createNewRes.php" method="post">
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Создать резюме</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-3">
              <div class="form-group">
                <input type="file" class="dropify" data-default-file="img/avatar.png">
              </div>
            </div>

            <div class="col-xs-12 col-sm-9">
              <div class="form-group">
                <input type="text" class="form-control" name ="fio" id="fio" placeholder="ФИО">
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" name ="vacancy_title" id="vacancy_title" placeholder="Вакансия">
              </div>

              <div class="form-group">
                <textarea class="form-control" rows="3" name ="personal_inf" id="personal_inf" placeholder="Обо мне"></textarea>
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
                    <input type="text" class="form-control" name ="age" id="age" placeholder="Возраст">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="phone" id="phone" placeholder="Телефон в формате 89999999999">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="email" id="email" placeholder="E-mail">
                </div>
              </div>
			  <h6><font color="black">Образование</font></h6>
              <div class="row">
                <div class="form-group col-xs-12 ">
                    <input type="text" class="form-control" name ="education_level" id="education_level" placeholder="Уровень">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="graduation_year" id="graduation_year" placeholder="Год окончания">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="study_place" id="study_place" placeholder="Учебное заведение">
                </div>
              </div>
			  <h6><font color="black">Опыт работы (последнее место работы)</font></h6>
              <div class="row">
                <div class="form-group col-xs-12 ">
                    <input type="text" class="form-control" name ="organisation" id="organisation" placeholder="Организация">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="website" id="website" placeholder="Сайт">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="duty" id="duty" placeholder="Должность">
                </div>
				<div class="form-group col-xs-12">
                    <div class="input-group">
                        <input type="text" class="form-control" name ="begin_work" id="begin_work" placeholder="Начало работы в формате гггг-мм-дд">
                        <input type="text" class="form-control" name ="finish_work" id="finish_work" placeholder="Окончание в формате гггг-мм-дд">
                    </div>
                </div>
              </div>
			  <h6><font color="black">Знание языков</font></h6>
              <div class="row">
                <div class="form-group col-xs-12 ">
                    <input type="text" class="form-control" name ="language" id="language" placeholder="Язык">
                </div>
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" name ="lang_level" id="lang_level" placeholder="Уровень владения">
                </div>
              </div>
            </div>
          </div>
          <div class="button-group">
            <div class="action-buttons">
              <div class="upload-button">
                <button class="btn  btn-download">Загрузить из файла</button>
                <input type="file">
              </div>
            </div>
          </div>
        </div>		
      </header>
      <main>
		<div style='text-align:center'>
			<button class="btn btn-success btn-xl btn-round" style='color:#d68048'>Сохранить резюме</button>
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
