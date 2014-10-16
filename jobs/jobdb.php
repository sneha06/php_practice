<?php 


function db_open(){

	 $conn = mysql_connect("localhost","root","123");
	 mysql_select_db("job");
	 return $conn;
}
function add_job($title,$job_description,$employer,$location,$salary,$website,$qualification){
    
    $con = db_open();
    
	$sql ="insert into jobport(title,description,employer,location,salary,website,Qualification) Values('$title',
		'$job_description','$employer','$location','$salary','$website','$qualification')";
	//echo $sql;   	
	$result= mysql_query($sql);
	mysql_free_result($result);
}

//add_job('job','djdfhfg','google','bonglore','345566443','asd@gmail.com','hvhjbjhbjh');

function get_jobs(){
 	$db = db_open();
 	
 	$sql = "select * from jobport";
 	$result=mysql_query($sql);
 	return $result;
 	//$array = mysql_fetch_assoc($result);
 	
}
/*
 $result = get_jobs();
 while($row = mysql_fetch_assoc($result)) {
 	echo $row['title']."<br>";
  	echo $row['salary']."<br>";
  	echo $row['employer']."<br><br>";
 }
*/
 function get_job($id){
 	$con=db_open();
 	
 	  $sql = "select * from jobport where id = '$id'";
 	 $result = mysql_query($sql);
 	return $result;
 }



 function add_uinfo($name,$password){
      $con = db_open();  
      
      $sql ="insert into user(name,password) Values('$name','$password')";
      $result = mysql_query($sql);
      return $result;
 }
 function confirm_user($name,$password){
 	$db = db_open(); 
 	 $sql = "select * from user where name = '$name' and password = '$password'" ;
 	 //echo $sql;
 	 $result = mysql_query($sql); 
 	 //echo $result["name"];
 	 $count = mysql_num_rows($result);
 	 //echo $count;
 	/* if ($count == 1)
 	 {
 	 	session_start();

 	 }
 	 */
 	 return $count;
 }

?>