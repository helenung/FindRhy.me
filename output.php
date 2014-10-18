<?php


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindRhy.me</title>
		<link rel="icon" type="image/png" href="img/favicon-01.png">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link href="output.css" type="text/css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="location.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<script src="output.js"></script>
		
		
	</head>

	<body>
		<div class="header">
			<a href="index.php"><img class="logo" src="img/logo-01.png"></a>
			<h1>Poems Near You</h1>
			<h2>DISCOVER . CREATE . SHARE</h2>
		</div>
        <div >
           <p id="income" style="display: none"></p>
            <p id="commute" style="display: none"></p>
        </div>
        <hr />
		<div id="map">
		</div>
		<div class="search">
			<form action="output.php" method="post">
			 <input class="submit" type="submit" id="outputSubmit" value="RE-FIND RHYMES"/>

			</form>
		</div>
		<div class="footer">
			<h3>Created by Walter Ceder, Luke Jin-li Chang, Jenny Chen, & Helen Ung.</h3>
			DubHacks 2014 
		</div>
		
	</body>
</html>
