<?php
session_start();
unset ($_SESSION['name']);
session_destroy();
//session_commit();
//echo var_dump($_SESSION);
header("location:login.php?name=".$_SESSION['name']);
?>