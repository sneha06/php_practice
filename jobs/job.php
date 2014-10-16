<?php
	 include 'jobdb.php';
      
?>
<!DOCTYPE html>
<html>
<head>
	<title>job</title>
</head>
<body>
  <p align="right">
	<a href="log_out.php">logout</a>
</p>
	<?php
		 $id = $_GET["id"];
		

		$result = get_job($id);
		while($r = mysql_fetch_assoc($result))
		{
    
	?>
			<div width=30% align="center">
				
				<table>
						
						<tr>
						<th>employer :</th>
							<th><?php echo $r['employer'];?></th>
						</tr>
						<tr>
							<th>Job description :</th>
							<th> <?php echo $r['description'];?></th>
						</tr>
						<tr>
							<th>Salary :</th>
							<th><?php echo $r['salary']?></th>
						</tr>
						<tr>
							<th>location :</th>
							<th><?php echo $r['location']?></th>
						</tr>
						<tr>
							<th>Qualification :</th>
							<th><?php echo $r['Qualification']?></th>
						</tr>
						<tr>
							<th>website :</th>
							<th><?php echo $r['website'];?></th>
						</tr>
				</table>
			</div>
	   
	   <?php } ?>
</body>
</html>
