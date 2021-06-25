<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>Регистрация</title>
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
  </head>

  <body class="login-page">
    <main>
      <div class="login-block">
        <h1>Регистрация</h1>
        <form action="db/check.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name ="fio" id="fio" placeholder="ФИО">
            </div>
          </div>
          
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name ="email" id="email" placeholder="E-mail">
            </div>
          </div>
		  
		  <hr class="hr-xs">
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
          <button class="btn btn-primary btn-block">Зарегистрироваться</button>
        </form>
      </div>
      <div class="login-links">
        <p class="text-center">Уже есть аккаунт? <a class="txt-brand" href="login.php">Войти</a></p>
      </div>
    </main>
    <script src="js/app.min.js"></script>
  </body>
</html>
