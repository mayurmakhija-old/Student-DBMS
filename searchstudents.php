<?php
define('DB_HOST','localhost');
define('DB_NAME','sid');
define('DB_USER','root');
define('DB_PASSWORD','');
if(isset($_POST['submit']))
{
	display();
}
function display() {
	$con=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$students = $con->query("SELECT * FROM students WHERE reg = '".$_POST['regno']."'");

	$regno = $_POST['regno'];
	
	if($students->num_rows > 0){
					while($row = $students->fetch_assoc()){
						echo '<br><br><br>Name: ' . $row["name"]. '<br>Email Id: ' . $row["email"]. '<br>Mobile Number: ' . $row["mobile"]. '<br>Course Registered: ' . $row["course"]. '<br>Rank: ' . $row["rank"]. '<br>';
					}
	}
	else {
					echo '<br><br><br>No such students';
				}
				$con->close();
}
?>