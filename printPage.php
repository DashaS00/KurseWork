<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" media="print" >
	<script>
        function printPage() {
            javascript: (print());
        }
    </script>
    <title>Резюме</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
	<style type="text/css" media="print">
		button 
		{
			display: none; 
		}
	</style>
  </head>
  <body class="nav-on-header">
    <header>
      <div class="container">
        <div class="row">
          <div class="header-detail">
            <div>
              <h2>ФИО</h2>
              <h4>Вакансия</h4>
            </div>
            <hr>
            <p class="lead">Обо мне</p>
            <ul class="details cols-2">
              <li>
                <span>Город</span>
              </li>
              <li>
                <span>Желаемая зарплата</span>
              </li>
              <li>
                <span>Возраст</span>
              </li>
              <li>
                <span>Телефон</span>
              </li>
              <li>
                <span>email</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <main>
        <div class="container">
          <header class="section-header">
            <h3>Образование</h3>
          </header>
          <div class="row">
            <div class="col-xs-12">
              <div>
                <header>
                  <div >
                    <h5>Уровень</h5>
                    <h6>Учебное заведение</h6>
                  </div>
                  <h6 class="time">Окончание</h6>
                </header>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <header class="section-header">
            <h3>Последнее место работы</h3>
          </header>
          <div class="row">
            <div class="col-xs-12">
              <div >
                <header>
                  <div>
                    <h5>Организация</h5>
                    <h6>Должность</h6>
                  </div>
                  <h6 class="time">Сроки работы</h6>
                </header>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <header class="section-header">
            <h3>Знание языков</h3>
          </header>
          <div class="row">
            <div class="col-xs-12">
              <div>
                <header>
                  <div>
                    <h5>Язык</h5>
                    <h6>Уровень</h6>
                  </div>
                </header>
              </div>
            </div>
          </div>
        </div>
    </main>
        <div style="padding-left: 10px">
		<button onclick="printPage()">Печать</button>
        </div>
  </body>
</html>
