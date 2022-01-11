<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>Вход</title>
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
  </head>
  <body class="login-page">
    <main>
	<?php
		if($_COOKIE['user'] == ''):
	?>
      <div class="login-block">
        <h1>Войти</h1>
        <form  action="db/authHirer.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name ="login" id="login" placeholder="Логин">
            </div>
          </div>
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" name ="password" id="password" placeholder="Пароль">
            </div>
          </div>
          <button class="btn btn-primary btn-block">Войти</button>
        </form>
      </div>
      <div class="login-links">
        <a class="pull-right" href="register.php">Зарегистрироваться</a>
      </div>
	  <?php else: ?>
		<p><?=$_COOKIE['user']?>, Вы уже вошли. Для выхода вернитесь на предыдущую страницу и нажмите на кнопку "Выход"</p>
	  <?php endif;?>
    </main>
    <script src="js/app.min.js"></script>
  </body>
</html>
