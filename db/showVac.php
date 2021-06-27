<?php
	function getVacancies(){
		$mysql = new mysqli('localhost','root','','dreamjob');
		$mysql->query("SET NAMES 'utf8'");
		$result = $mysql->query("SELECT `vacancies`.`id` , `vacancies`.`name` , `vacancies`.`organization` ,  
		`vacancies`.`description` , `vacancies`.`city` , `vacancies`.`salary` , `schedule`.`schedule_name` , 
		`experience`.`experience_name` FROM `vacancies` INNER JOIN `schedule` ON `vacancies`.`schedule` = `schedule`.`id`
		INNER JOIN `experience` ON `vacancies`.`expierence` = `experience`.`id`");
		$mysql->close();
		return resultToArray ($result);
	}
	function resultToArray ($result){
		$array = array();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>
