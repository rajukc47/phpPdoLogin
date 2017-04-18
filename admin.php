<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
</body>
</html>