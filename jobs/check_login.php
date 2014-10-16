<?php 
    include 'jobdb.php';

    $isUser = confirm_user($_GET['name'],$_GET['password']);
   // echo $isUser;
    if($isUser >=1){
    	session_start();
    	$_SESSION['name'] = $_GET['name'];
    	echo "<META http-equiv='refresh' content='0;URL=jobList.php'>";
    }else{
             
             echo "<META http-equiv='refresh' content='0;URL=login.php'>";
    }

    
?>