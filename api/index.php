<?php 
	require_once('./config/database.php');
	$connect = openConnection();
	$message = "";
	if($connect){
		$message = "Successfully connected to Ndege API";
	} else {
		$message = "Sorry we could not connect to Ndege API try again later";
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ndege - For your Microfinces Needs</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/custom.css">
</head>
<body>
	

	<div class="container space-top">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6 text-center">
				<div class="alert alert-info"><?php echo $message; ?></div>
			</div>
		</div>
	</div>
	
	

	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>