<?php
	require_once"db/conn.php";
	function getUsers(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `users` ORDER BY `id`");
		closeDB();
		return resultToArray ($result);
	}
	function resultToArray ($result){
		$array = array();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}	
	header('Location: /adminUsers.php');
?>