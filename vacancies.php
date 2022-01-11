<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>Поиск работы</title>
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		function scheduleSelect(formname) {
			$('form[name='+formname+'] :checkbox[name="select[]"]').click()
		}
		function salarySelect(formname) {
			$('form[name='+formname+'] :checkbox[name="select[]"]').click()
		}
		function experienceSelect(formname) {
			$('form[name='+formname+'] :checkbox[name="select[]"]').click()
		}
	</script>
	<?php
		require_once "db/showVac.php";
		$vacancies = getVacancies();
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
            <a href="index1.php">Главная</a>
          </li>
          <li>
            <a  class="active" href="vacancies.php">Вакансии</a>
          </li>
          <li>
            <a href="#">Резюме</a>
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
    <header class="page-header bg-img" style="background-image: url(img/banner.jpg);">
      <div class="container page-name">
        <h2 class="text-center" style="color:#fff">Найди работу по душе</h2>
      </div>
      <div class="container">
          <div class="row">
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" name ="keyword" id="keyword" placeholder="Ключевые слова">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" name ="city" id="city" placeholder="Город">
            </div>
            <div class="form-group col-xs-10 col-sm-4">
              <select class="form-control selectpicker" multiple>
                <option selected>Все категории</option>
                <option>Торговля</option>
                <option>Логистика</option>
                <option>IT</option>
                <option>Банки</option>
                <option>Рестораны</option>
                <option>Транспорт</option>
                <option>Туризм</option>
                <option>Медицина</option>
                <option>Недвижимость</option>
				<option>Красота</option>
				<option>Дизайн</option>
				<option>Образование</option>
              </select>
            </div>				
            <div class="form-group col-xs-12 col-sm-4">
              <h6 style="color:#000000">Занятость</h6>
			  <form name="schedule">
			  <div>
				<label><input type="checkbox" name="select[]"/>&nbsp;Любая</label>
				</div>
			  <div>
				<label><input type="checkbox" name="select[]"/>&nbsp;Полный день</label>
			  </div>
			  <div>
				<label><input type="checkbox" name="select[]"/>&nbsp;Частичная занятость</label>
			  </div>
			  <div>
				<label><input type="checkbox" name="select[]"/>&nbsp;Вахта</label>
			  </div>
			  <div>
				<label><input type="checkbox" name="select[]"/>&nbsp;Свободный график</label>
			  </div>
			  <div>
				<label><input type="checkbox" name="select[]"/>&nbsp;Сменный график</label>
			  </div>
			  <div >
				<label><input type="checkbox" name="select[]"/>&nbsp;Удаленная работа</label>
			  </div>
			  <div>
				<a input type="checkbox" id="select_all"  onClick="scheduleSelect('schedule')" >&nbsp;Отметить все</a>
			  </div>
			</form>                
            </div>
			<div class="form-group col-xs-12 col-sm-4">
              <h6 style="color:#000000">Зарплата</h6>
			  <form name="salary">
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;Любая</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;До 20000</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;20000-50000</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;50000-80000</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;80000-150000</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;Более 150000</label>
				</div>
				<div>
					<a input type="checkbox" id="select_all"  onClick="salarySelect('salary')" >&nbsp;Отметить все</a>
				</div>
				</form>                
            </div>
			<div class="form-group col-xs-12 col-sm-4">
              <h6 style="color:#000000">Опыт работы</h6>
				<form name="experience">
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;Любой</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;Нет опыта</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;Менее 1 года</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;1 - 3 года</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;3 - 5 лет</label>
				</div>
				<div>
					<label><input type="checkbox" name="select[]"/>&nbsp;Более 5 лет</label>
				</div>
				<div>
					<a input type="checkbox" id="select_all"  onClick="experienceSelect('experience')">&nbsp;Отметить все</a>
				</div>
				</form>                
            </div>
		  </div>
          <div class="button-group">
            <div class="action-buttons">
              <button class="btn btn-primary" name="filter">Применить фильтр</button>
            </div>
          </div>   
      </div>
    </header>
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
			 <?php 
			for ($i = 0; $i < count($vacancies); $i++){
				echo '<a class="item-block" href="#">
				<header>
                  <div class="hgroup">
                    <h4>'.$vacancies[$i]["name"].'</h4>
                    <h5>'.$vacancies[$i]["organization"].'</h5> 
					<h5>'.$vacancies[$i]["schedule_name"].'</h5>
                  </div>
                </header>
                <div class="item-body">
                  <p>'.$vacancies[$i]["description"].'</p>
                </div>
                <footer>
                  <ul class="details cols-3">
                    <li>
                      <span>'.$vacancies[$i]["city"].'</span>
                    </li>
                    <li>
                      <span>'.$vacancies[$i]["salary"].'</span>
                    </li>
                    <li>
                      <span>'.$vacancies[$i]["experience_name"].'</span>
                    </li>
                  </ul>
                </footer>
				</a>';
			 }
		  ?>
            </div>
          </div>
          <nav class="text-center">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <i style="color:#000000">Предыдущая</i>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <i style="color:#000000">Следующая</i>
                </a>
              </li>
            </ul>
          </nav>
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
