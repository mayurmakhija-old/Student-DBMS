<?php
define('DB_HOST','localhost');
define('DB_NAME','sid');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysql_select_db(DB_NAME,$con);
function SignUp() {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['number'];
	$landline = $_POST['lnumber'];
	$dob = $_POST['dob'];
	$course = $_POST['course'];
	$boards = $_POST['boards'];
	$reg = $_POST['reg'];
	$rank = $_POST['rank'];
	$query = "INSERT INTO students (name,email,dob,mobile,landline,boards,course,rank,reg) 
	VALUES ('$name','$email','$dob','$mobile','$landline','$boards','$course','$rank','$reg')";
	$data = mysql_query($query);
	if($data)
	{
		echo 'Student admitted';
		session_start();
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='welcome.php'\">");
	}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>