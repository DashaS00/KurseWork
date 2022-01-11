<?php	
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$description = filter_var(trim($_POST['description']),
	FILTER_SANITIZE_STRING);
	$city = filter_var(trim($_POST['city']),
	FILTER_SANITIZE_STRING);
	$salary = filter_var(trim($_POST['salary']),
	FILTER_SANITIZE_STRING);
	$organization = filter_var(trim($_POST['organization']),
	FILTER_SANITIZE_STRING);
	$schedule = filter_var(trim($_POST['schedule']),
	FILTER_SANITIZE_STRING);
	$expierence = filter_var(trim($_POST['expierence']),
	FILTER_SANITIZE_STRING);
	$category = filter_var(trim($_POST['category']),
	FILTER_SANITIZE_STRING);
	
	if(mb_strlen($name) < 1 || mb_strlen($name) > 255){
		echo "Название отсутствует или слишком длинное, попробуйте ввести еще раз";
		exit();
	}
	if(mb_strlen($description) > 500){
		echo "Слишком много информации о вакансии (максимум 500 символов)";
		exit();
	}
	if(mb_strlen($city) < 1 || mb_strlen($city) > 100){
		echo "Город отсутствует или слишком длинный, попробуйте ввести еще раз";
		exit();
	}
	if(mb_strlen($salary) < 1 || mb_strlen($salary) > 15){
		echo "Недопустимое значение зарплаты";
		exit();
	}
	if(mb_strlen($organization) < 1 || mb_strlen($organization) > 100){
		echo "Недопустимое значение компании";
		exit();
	}
	if(mb_strlen($schedule) < 1 ){
		echo "Недопустимое значение уровня занятости";
		exit();
	}
	if(mb_strlen($expierence) < 1){
		echo "Недопустимое значение опята работы";
		exit();
	}
	if(mb_strlen($category) < 1){
		echo "Недопустимое значение категории";
		exit();
	}

	$mysql = new mysqli('localhost','root','','dreamjob');
	$mysql->query("SET NAMES 'utf8'");
	$mysql->query("INSERT INTO `vacancies` (`name`, `description`, `city`, `salary`, `organization`, `schedule`, `expierence`, `category`, `fio`) 
	VALUES('$name', '$description', '$city', '$salary', '$organization', '2', '1', '4', '".$_COOKIE['user']."')");
	$mysql->close();
	header('Location: /myVac.php');
?>