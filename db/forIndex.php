<?php
	require_once"db/conn.php";
	function getVacancies(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `vacancies` ORDER BY `id` DESC LIMIT 6");
		closeDB();
		return resultToArray ($result);
	}
	function resultToArray ($result){
		$array = array();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
	function getCountVacancies(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT COUNT( * )FROM `vacancies`");
		closeDB();
		return resultToArray ($result);
	}
	function getCountResume(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT COUNT( * ) FROM `resume`");
		closeDB();
		return resultToArray ($result);
	}
	function getAvgSalary(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT ROUND( AVG( salary ) , 0 ) FROM `vacancies`");
		closeDB();
		return resultToArray ($result);
	}
?>