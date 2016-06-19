<?php
define('DB_HOST','localhost');
define('DB_NAME','sid');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysql_select_db(DB_NAME,$con);
if(isset($_POST['submit']))
{
	delete();
}
function delete() {
	$query = "DELETE FROM students WHERE reg = '".$_POST['regnop']."'";
	$data = mysql_query($query);
	if($data)
	{
		echo 'Student record deleted';
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='welcome.php'\">");
	}
}
?>