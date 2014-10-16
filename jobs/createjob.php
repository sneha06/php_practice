
<?php
	 include 'jobdb.php';

    session_start();
    if (isset($_SESSION['name'])) {
    echo 'hello ' . $_SESSION['name'];
    //var_dump($_SESSION);
} else {
	echo "<a href='login.php'.>login</a>";

}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:#FF9966;">
	
	<div align="center" width=60% height = 100% style="vertical-align:center;" >
		 <form action = "jobList.php" method = "GET"> 
			<table align="center"  >


				<tr>
					<td style="font-size:20px">
						Job Title
					</td>
					<td>
						<input type="text" name="job_title" >
					</td>
				</tr>


				<tr><td style="font-size:20px">Salary</td><td><input type="text" name="salary" ></td></tr>
				<tr><td style="font-size:20px">Job Description</td><td><textarea rows="5" cols="20" 
				name="job_discription"></textarea></td></tr>

				<tr><td style="font-size:20px">Location</td><td><input type="text" name="location"></td></tr>
				<tr><td style="font-size:20px">Qualification</td><td><input type="text" name="Qualification"></td></tr>
				<tr><td style="font-size:20px">Employer</td><td><input type="text" name="employer"></td></tr>
				<tr><td style="font-size:20px">website</td><td><input type="text" name="website"></td></tr>

				<tr><td style="font-size:20px"><input type="submit"></td></tr>

			</table>
		</form>
	</div>
	
</body>
</html>
