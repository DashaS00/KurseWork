<?php
	require_once"db/conn.php";
	function getVac(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `vacancies` WHERE `fio` = '".$_COOKIE['user']."' ORDER BY `id` DESC");
		closeDB();
		return resultToArray ($result);
	}
	function resultToArray ($result){
		$array = array();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>