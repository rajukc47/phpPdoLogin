<?php
session_start();
define('HOSTNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','db_test');
$message = "";

try
{

}
catch(PDOException $e)
{
	$message=$e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container" style="width: 500px;">
	<h1>Login Form</h1>
	<form method="post">
		<label>Username </label>
		<input type="text" name="username" class="form-control"><br />
		<label>Password </label>
		<input type="password" name="password" class="form-control"><br />
		<input type="submit" name="login" value="Login" class="btn btn-info">
	</form>
</div>
</body>
</html>