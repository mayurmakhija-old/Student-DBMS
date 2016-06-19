<html>
<head>
	<title>Take admission</title>
</head>
<body>
	<form method="post" action="studentregister.php">
		<h3>Name :</h3><input style="padding:10" type="text" name="name" value placeholder="Enter name" /><br>
		<h3>Email id: </h3><input style="padding:10" type="text" name="email" value placeholder="enter valid email id" /><br>
		<h3>Date of birth: </h3><input style="padding:10; width: 400px;" type="text" name="dob" value placeholder="enter date of birth in the format ('DD/MM/YYYY')" /><br>
		<h3>Contact Info: </h3>
		<h3>Mobile Number: </h3><input style="padding:10" type="text" name="number" value placeholder="enter mobile number" /><br>
		<h3>Landline number: </h3><input style="padding:10" type="text" name="lnumber" value placeholder="enter landline number" /><br>
		<h3>12th percentage: </h3><input style="padding:10" type="text" name="boards" value placeholder="enter landline number" /><br>
		<h3>Course interested: </h3><select style="padding:10" name="course">
											<option value="it">Infomation Technology</option>
											<option value="mech">Mechanical Engineering</option>
											<option value="cse">Computer Science engineering</option>
											<option value="ece">Electronics and Communication</option>
										</select>		
		<h3>Entrance exam rank: </h3><input style="padding:10" type="text" name="rank" value placeholder="enter rank in 5 digits" /><br>
		<h3>Enter unique reg no: </h3><input style="padding:10" type="text" name="reg" value placeholder="enter unique reg no" /><br><br><br>
		<input type="submit" name="submit" value="Admit student" />
	</form>
</body>
</html>	