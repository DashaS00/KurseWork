<?php
	require_once"db/conn.php";
	
	function getResume(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `resume` WHERE `fio` = 'Смирнова Мария Александровна' ORDER BY `id` DESC");
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