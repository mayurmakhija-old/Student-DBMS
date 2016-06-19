<?php
if(isset($_SESSION["signin"]))
{
	echo("<meta http-equiv=\"refresh\" content=\"0;URL='welcome.php'\">");
}
?>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<h1 align="center">Welcome to xyz college</h1>
<hr><br><br><br><br><br><br><br><br><br>
<form method="post" action="admin.php">
Log in: <input type="text" name="user"/><br>
Password: <input type="password" name="pass"/><br>
<input type="submit" name="submit" value="Log In"/>
</form>