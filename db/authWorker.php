<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);
	
	$mysql = new mysqli('localhost','root','','dreamjob');
	$mysql->query("SET NAMES 'utf8'"); 
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' AND `status` = 'Соискатель'");
	$user = $result->fetch_assoc();
	if (count($user) == 0){
		echo "Неверный логин или пароль";
		exit();
	}
	setcookie('user', $user['fio'], time() + 3600, "/");	
	$mysql->close();
	header('Location: /indexWorker.php');
?>