

<?php

	 include 'jobdb.php';

session_start();
if (isset($_SESSION['name'])) {
    echo 'hello ' . $_SESSION['name'];
    //var_dump($_SESSION);
} else {
	echo "<a href='login.php'.>login</a>";

}


if (isset ($_GET['job_title'])) {
	add_job($_GET['job_title'],$_GET['job_discription'],$_GET['salary'],$_GET['location'],
 			$_GET['Qualification'],$_GET['employer'],$_GET['website'] );
//    add_job('developer','jd','sa','lo','q','e','w');	 
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title><p>job list</p></title>
</head>
<body style="background-color:#FF9966;">
<p align="right">
	<a href="log_out.php">logout</a>
</p>
   <h3 align="center">Job List</h3>


<?php
$result = get_jobs();
while($r = mysql_fetch_assoc($result))
{
?>
     
  
     <section align="center"  style="background-color:#99CCFF;float:left;padding-left:5px;margin-left:2%;margin-top:2%;width:10%;height:200px">
     
       <table align="center" border="1px solid #99CCFF" style="float:left;width:100%;">
         <tr>
         		<td><a href="job.php?id=<?php echo $r['id'];?>"> <?php echo $r['title']?></a></td>
         </tr>
         	<tr>
         		<td>Job title :<?php echo $r['title'];?></td>

         	</tr>
         	<tr>
         		<td>Employer :<?php echo $r['employer'];?></td>
         	</tr>
         	<tr>
         		<td>Location :<?php echo $r['location'];?>e</td>
         	</tr>
       </table>
    
     </section>
   
<?php
}
?>
</body>
</html>
