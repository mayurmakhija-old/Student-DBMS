<?php
define('DB_HOST','localhost');
define('DB_NAME','sid');
define('DB_USER','root');
define('DB_PASSWORD','');
$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysql_select_db(DB_NAME,$con);
if(isset($_POST['submit']))
{
	SignIn();
}
function SignIn()
{
session_start();
if(!empty($_POST['user']))
{
	$query = mysql_query("SELECT * FROM admins WHERE uname = '".$_POST['user']."' && pw = '".sha1($_POST['pass'])."'");
	$row = mysql_fetch_array($query);
	if(!empty($row['uname']) AND !empty($row['pw']))
	{
			session_start();
			$_SESSION["signin"]=1;
			echo("<meta http-equiv=\"refresh\" content=\"0;URL='welcome.php'\">");
	}
	else
	{
		echo "Wrong username or pw entered";
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='index.php'\">");
	}
}
}
?>