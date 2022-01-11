<?php	
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);
	$company = filter_var(trim($_POST['company']),
	FILTER_SANITIZE_STRING);
	
	if(mb_strlen($email) < 5 || mb_strlen($email) > 60){
		echo "Недопустимая длина email(от 5ти символов)";
		exit();
	}
	if(mb_strlen($login) < 5 || mb_strlen($login) > 50){
		echo "Недопустимая длина логина (от 5ти символов)";
		exit();
	}
	if(mb_strlen($password) < 4 || mb_strlen($password) > 10){
		echo "Недопустимая длина пароля (от 4х до 10ти символов)";
		exit();
	}
	
	$mysql = new mysqli('localhost','root','','dreamjob');
	$mysql->query("SET NAMES 'utf8'");
	
	$mysql->query("UPDATE `dreamjob`.`users` SET `email`='$email', `login`='$login', `password`='$password', `company`='$company' 
	WHERE `fio`='".$_COOKIE['user']."'");
	$mysql->close();
	header('Location: /LkWorker.php');
?>