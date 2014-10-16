
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 
 <form action="hello.php" method="GET">
	 Name      : <input type="text" name="name"><br/>
	 Blog Post : <input type="text" name="blog_post"><br/>
	 Title     : <input type="text" name="title"><br/>
	 <input type="submit">
 </form>
 <?php 
  $name = $_GET['name'];
  $blog_post = $_GET['blog_post'];
  $title = $_GET['title'];

   $conn = mysql_connect("localhost","root","123");
   mysql_select_db("blog");
   $sql = "insert into blog(name,title,blog_post) Values('".$name."','".$blog_post."','".$title."')";
   $result = mysql_query($sql);
   if (!$conn)
{
    die('Could not connect: ' .mysql_error());
}
   

   $select = "select * from blog";
   $s = mysql_query($select);
   while($r = mysql_fetch_assoc($s))
   {
     echo $r['name']."<br>";
     echo $r['blog_post']."<br>";
     echo $r['title']."<br><br>";
   }
   mysql_free_result($s);
   mysql_close();


/*$blog1 = array(
	"name"=>"Vivek",
	"blog_post" => "Hi I am Vivek",
	"title" => "Vivek"
);	
$blog2 = array(
	"name"=>"Arpit",
	"blog_post" => "Hi I am Arpit",
	"title" => "Arpit"
);	
$blog3 = array(
	"name"=>"Sneha",
	"blog_post" => "Hi I am Sneha",
	"title" => "Sneha"
);	
$blogs = array($blog1,$blog2,$blog3);
foreach ($blogs as $blog ) {?>
	<p><?php echo $blog['name'];?></p>
	<p><?php echo $blog['blog_post'];?></p>
	<p><?php echo $blog['title'];?></p>
	<?php
}*/
 
 ?>
 </body>
 </html>
