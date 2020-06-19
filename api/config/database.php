<?php

	require_once('config.php');

	function openConnection(){
		try {
			
		  $connect = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
		  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  return $connect;

		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}