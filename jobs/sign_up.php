<?php 
    include 'jobdb.php';

    $isUser = add_uinfo($_GET['name'],$_GET['password']);
   // echo $isUser;
    if($isUser){
    	session_start();
    	$_SESSION['name'] = $_GET['name'];
    	echo "<META http-equiv='refresh' content='0;URL=createjob.php'>";
    } else 
    {
    	echo "<META http-equiv='refresh' content='0;URL=login.php'>";
    }


?>