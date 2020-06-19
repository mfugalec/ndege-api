<?php
	// returns a single user in a json format

	require_once('../config/database.php');
	$connect = openConnection();

	$id = "";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}


	if($connect){

		$query = "SELECT * FROM tbl_users WHERE id = {$id}";
		$result = $connect->query($query);

		$totalElements = 0;
		$stmt = $connect->prepare($query); 
  		$stmt->execute();

		$resultJson = $stmt->fetch(PDO::FETCH_ASSOC);
		print json_encode($resultJson);

	}

	

