<?php	
	$mysql = new mysqli('localhost','root','','dreamjob');
	$mysql->query("SET NAMES 'utf8'");
	$mysql->query("DELETE FROM `vacancies` WHERE `fio` = '".$_COOKIE['user']."' ");
	$mysql->close();
	header('Location: /myVac.php');
?>