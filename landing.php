<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>Лэндинг</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body class="nav-on-header">
    <nav class="navbar">
      <div class="container">
        <div class="pull-left">
          <div class="logo-wrapper">
            <a class="logo-alt" href="index.html"><img src="img/logo.jpg" alt="logo-alt"></a>
          </div>
        </div>
      </div>
    </nav>
    <header class="site-header size-lg text-center" style="background-image: url(img/banner.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>Разработка сайта для поиска работы "DreamJob"</h2>
		  <h5>Вы находитесь на странице-визитке данного сайта</h5>
          <br><br><br>
        </div>
      </div>
    </header>
    <main>
	  <section>
        <div class="container">
          <header class="section-header">
            <h3>О проекте</h3>
          </header>
          <div class="row item-blocks-connected">
            <div style="text-align:center">
			<h5>В качестве курсового проекта был создан многостраничный сайт для поиска работы. На сайте для 
			неавторизованного пользователя доступна лишь первая страница. Чтобы начать работу с сайтом необходимо 
			авторизоваться. С помощью данного сайта соискатели могут создать резюме, после 
			чего просмотреть их, а так же просмотреть имеющиеся вакансии. Работодателям предоставлена возможность 
			создать вакансию и просмотреть свои вакансии. Администратор имеет доступ к списку пользователей и их персональным
			данным, а так же к статистической информации. Кроме того все пользователи имеют доступ к личному кабинету 
			с возможностью редактирования своих персональных данных.</h5>
			<h5 style="text-align:left">Разработчик</h5>
			<p style="text-align:left">Стефанова Дарья Кирилловна, группа 191-361</p>
            </div>
          </div>
		</div>
      </section>
	  <section style="background-color:rgb(214, 128, 72)">
        <div class="container">
          <header class="section-header">
            <h2>Использовано:</h2>
          </header>
          <div class="row item-blocks-connected">
			<div class="col-xs-3">
				<div style="text-align:center">
				<h5 style="color:#fff">JS</h5>
				</div>
			</div>
			<div class="col-xs-3">
				<div style="text-align:center">
				<h5 style="color:#fff">JQuery</h5>
				</div>
			</div>
			<div class="col-xs-3">
				<div style="text-align:center">
				<h5 style="color:#fff">Bootstrap</h5>
				</div>
			</div>
			<div class="col-xs-3">
				<div style="text-align:center">
				<h5 style="color:#fff">php и MySql</h5>
				</div>
			</div>
		  </div>
		</div>
      </section>
	  <section>
        <div class="container">
          <header class="section-header">
            <h4>Ниже Вы можете просмотреть ознакомительное видео и оценить результат проделанной работы</h4>
          </header>
		  <div class="row item-blocks-connected">
            <div style="text-align:center">
				<video src="video/video.mp4" width="500" height="400" controls="controls">
			</div>
		  </div>
		</div>
      </section>
      <section class="bg-img text-center" style="background-color: rgb(214, 128, 72)">
        <div class="container">
          <h2><strong>Попробуйте прямо сейчас!</strong></h2>
          <h6 class="font-alt">Нажмите на кнопку ниже для перехода на сайт</h6>
          <br><br>
          <form class="form-enter" action="#">
            <div class="input-group">
              <span class="input-group-btn">
                <a class="btn btn-success btn-lg" href="index.php">Перейти</a>
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
            <p class="text-justify">На данной странице находится краткое описание созданного сайта для поиска работы</p>
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
    <script src="js/app.min.js"></script>
  </body>
</html>
