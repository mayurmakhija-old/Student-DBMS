<?php
define('DB_HOST','localhost');
define('DB_NAME','sid');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysql_select_db(DB_NAME,$con);
if(isset($_POST['submit']))
{
	SignUp();
}
function SignUp() {
	$username = $_POST['adminuname'];
	$password = sha1($_POST['adminpw']);
	$query = "INSERT INTO admins (uname,pw) VALUES ('$username','$password')";
	$data = mysql_query($query);
	if($data)
	{
		echo 'User Registered';
		session_start();
		$_SESSION["signin"]=1;
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='welcome.php'\">");
	}
}
?>