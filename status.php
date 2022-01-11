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
      <div class="login-block">
        <h1>Кем вы являетесь?</h1>
        <form>
          <a class="btn btn-sm btn-primary" href="loginWorker.php">Соискатель</a><br><br>
		  <a class="btn btn-sm btn-primary" href="loginHirer.php">Работодатель</a><br><br>
		  <a class="btn btn-sm btn-primary" href="loginAdmin.php">Администратор</a>
        </form>
      </div>
      <div class="login-links">
        <a class="pull-right" href="register.php">Зарегистрироваться</a>
      </div>
    </main>
    <script src="js/app.min.js"></script>
  </body>
</html>
