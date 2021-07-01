<?php	
	$fio = filter_var(trim($_POST['fio']),
	FILTER_SANITIZE_STRING);
	$vacancy_title = filter_var(trim($_POST['vacancy_title']),
	FILTER_SANITIZE_STRING);
	$personal_inf = filter_var(trim($_POST['personal_inf']),
	FILTER_SANITIZE_STRING);
	$city = filter_var(trim($_POST['city']),
	FILTER_SANITIZE_STRING);
	$salary = filter_var(trim($_POST['salary']),
	FILTER_SANITIZE_STRING);
	$age = filter_var(trim($_POST['age']),
	FILTER_SANITIZE_STRING);
	$phone = filter_var(trim($_POST['phone']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$education_level = filter_var(trim($_POST['education_level']),
	FILTER_SANITIZE_STRING);
	$graduation_year = filter_var(trim($_POST['graduation_year']),
	FILTER_SANITIZE_STRING);
	$study_place = filter_var(trim($_POST['study_place']),
	FILTER_SANITIZE_STRING);
	$organisation = filter_var(trim($_POST['organisation']),
	FILTER_SANITIZE_STRING);
	$website = filter_var(trim($_POST['website']),
	FILTER_SANITIZE_STRING);
	$duty = filter_var(trim($_POST['duty']),
	FILTER_SANITIZE_STRING);
	$begin_work = filter_var(trim($_POST['begin_work']),
	FILTER_SANITIZE_STRING);
	$finish_work = filter_var(trim($_POST['finish_work']),
	FILTER_SANITIZE_STRING);
	$language = filter_var(trim($_POST['language']),
	FILTER_SANITIZE_STRING);
	$lang_level = filter_var(trim($_POST['lang_level']),
	FILTER_SANITIZE_STRING);
	
	if(mb_strlen($fio) < 1 || mb_strlen($fio) > 255){
		echo "ФИО отсутствует или слишком длинное, попробуйте ввести еще раз";
		exit();
	}
	if(mb_strlen($vacancy_title) < 1 || mb_strlen($vacancy_title) > 100){
		echo "Название вакансии отсутствует или слишком длинное, попробуйте ввести еще раз";
		exit();
	}
	if(mb_strlen($personal_inf) > 500){
		echo "Слишком много информации о себе (максимум 500 символов)";
		exit();
	}
	if(mb_strlen($city) < 1 || mb_strlen($city) > 100){
		echo "Город отсутствует или слишком длинное, попробуйте ввести еще раз";
		exit();
	}
	if(mb_strlen($age) < 1 || mb_strlen($age) > 3){
		echo "Недопустимое значение возраста";
		exit();
	}
	if(mb_strlen($phone) < 1 || mb_strlen($phone) > 11){
		echo "Недопустимое значение телефона";
		exit();
	}
	if(mb_strlen($email) < 1 || mb_strlen($email) > 50){
		echo "Недопустимое значение email";
		exit();
	}
	if(mb_strlen($education_level) < 1 || mb_strlen($education_level) > 30){
		echo "Недопустимое значение уровня образования";
		exit();
	}
	if(mb_strlen($graduation_year) < 1 || mb_strlen($graduation_year) > 4){
		echo "Недопустимое значение года выпуска";
		exit();
	}
	if(mb_strlen($study_place) < 1 || mb_strlen($study_place) > 200){
		echo "Недопустимое значение учебного заведения";
		exit();
	}
	if(mb_strlen($organisation) > 70){
		echo "Недопустимое значение названия организации (слишком длинное)";
		exit();
	}
	if(mb_strlen($website) > 100){
		echo "Недопустимое значение сайта (слишком длинное)";
		exit();
	}
	if(mb_strlen($duty) > 100){
		echo "Недопустимое значение должности  (слишком длинное)";
		exit();
	}
	if(mb_strlen($language) < 1 || mb_strlen($language) > 20){
		echo "Недопустимое значение языка";
		exit();
	}
	if(mb_strlen($lang_level) < 1 || mb_strlen($lang_level) > 20){
		echo "Недопустимая длина уровня владения";
		exit();
	}
	
	$mysql = new mysqli('localhost','root','','dreamjob');
	$mysql->query("SET NAMES 'utf8'");
	
	$mysql->query("UPDATE `dreamjob`.`resume` SET `personal_inf`='$personal_inf', `city`='$city', `salary`='$salary', `age`='$age', `phone`='$phone', 
	`email`='$email', `education_level`='$education_level', `graduation_year`='$graduation_year', 
	`study_place`='$study_place', `organisation`='$organisation', `website`='$website', `duty`='$duty', 
	`begin_work`='$begin_work', `finish_work`='$finish_work', `language`='$language', `lang_level`='$lang_level' 
	WHERE `fio`='".$_COOKIE['user']."' AND `vacancy_title`='$vacancy_title'");
	$mysql->close();
	header('Location: /myResume.php');
?>