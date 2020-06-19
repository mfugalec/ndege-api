<?php

	// returns a list of users in a json format
	// added more comments

	require_once('../config/database.php');

	$connect = openConnection();

	if($connect){

		$query = "SELECT * FROM tbl_users ORDER BY id ASC";
		$result = $connect->query($query);

		$totalElements = 0;
		$stmt = $connect->prepare($query); 
  		$stmt->execute();

  		// total number of records
  		$totalElements = $stmt->rowCount();


		$resultJson = $stmt->fetchAll(PDO::FETCH_ASSOC);
		print json_encode($resultJson);

	}

	

