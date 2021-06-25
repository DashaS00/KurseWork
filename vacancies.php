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
          <a class="btn btn-sm btn-primary" href="index.php">Выйти</a>
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
      </div>
    </nav>

    <header class="page-header bg-img" style="background-image: url(img/banner.jpg);">
      <div class="container page-name">
        <h2 class="text-center" style="color:#fff">Найди работу по душе</h2>
      </div>
      <div class="container">
        <form action="#">
          <div class="row">
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Ключевые слова">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Город">
            </div>
            <div class="form-group col-xs-12 col-sm-4">
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
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="contract1" name="contract" checked>
                  <label for="contract1">Любая</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="contract2" name="contract">
                  <label for="contract2">Полный день</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="contract3" name="contract">
                  <label for="contract3">Частичная занятость</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="contract4" name="contract">
                  <label for="contract4">Вахта</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="contract5" name="contract">
                  <label for="contract5">Свободный график</label>
                </div>
				<div class="checkbox">
                  <input type="checkbox" id="contract5" name="contract">
                  <label for="contract5">Сменный график</label>
                </div>
				<div class="checkbox">
                  <input type="checkbox" id="contract5" name="contract">
                  <label for="contract5">Удаленная работа</label>
                </div>
              </div>
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <h6 style="color:#000000">Зарплата</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="rate1" name="rate" checked>
                  <label for="rate1">Любая</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="rate2" name="rate">
                  <label for="rate2">До 20000</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="rate3" name="rate">
                  <label for="rate3">20000-50000</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="rate4" name="rate">
                  <label for="rate4">50000-80000</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="rate5" name="rate">
                  <label for="rate5">80000-150000</label>
                </div>
				<div class="checkbox">
                  <input type="checkbox" id="rate5" name="rate">
                  <label for="rate5">Более 150000</label>
                </div>
              </div>
            </div>
			
			<div class="form-group col-xs-12 col-sm-4">
              <h6 style="color:#000000">Опыт работы</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="rate1" name="rate" checked>
                  <label for="rate1">Любой</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="rate2" name="rate">
                  <label for="rate2">Нет опыта</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="rate3" name="rate">
                  <label for="rate3">Менее 1 года</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="rate4" name="rate">
                  <label for="rate4">1-3 года</label>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="rate5" name="rate">
                  <label for="rate5">3-5 лет</label>
                </div>
				<div class="checkbox">
                  <input type="checkbox" id="rate5" name="rate">
                  <label for="rate5">Более 5 лет</label>
                </div>
              </div>
            </div>
          </div>

          <div class="button-group">
            <div class="action-buttons">
              <button class="btn btn-primary">Применить фильтр</button>
            </div>
          </div>
        </form>
      </div>
    </header>

    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <a class="item-block" href="#">
                <header>
                  <div class="hgroup">
                    <h4>Вакансия</h4>
                    <h5>Компания График</h5>
                  </div>
                </header>
                <div class="item-body">
                  <p>Описание</p>
                </div>
                <footer>
                  <ul class="details cols-3">
                    <li>
                      <span>Город/адрес</span>
                    </li>
                    <li>
                      <span>Зарплата</span>
                    </li>
                    <li>
                      <span>Опыт работы</span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>

            <div class="col-xs-12">
              <a class="item-block" href="#">
                <header>
                  <div class="hgroup">
                    <h4>Вакансия</h4>
                    <h5>Компания График</h5>
                  </div>
                </header>
                <div class="item-body">
                  <p>Описание</p>
                </div>
                <footer>
                  <ul class="details cols-3">
                    <li>
                      <span>Город/адрес</span>
                    </li>
                    <li>
                      <span>Зарплата</span>
                    </li>
                    <li>
                      <span>Опыт работы</span>
                    </li>
                  </ul>
                </footer>
              </a>
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
