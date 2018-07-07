<html>
<?php
include 'functions/config.php';ini_set('max_execution_time', 3000);
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}
?>
<head>
<title>New posts
</title>
</head>
<body>
<center>
<h2> INSERT YOUR NEW POST </h2>
<form style="margin:auto;padding:40px;" action="" method="post" enctype="multipart/form-data">
<table> 
<tr>
<td>Descrioption</td><td><textarea name="desc" placeholder="saysomething about picture" cols="20" rows="5" required ></textarea></td>
</tr>
<tr>
<td>Image</td> <td><input type="file" accept=".jpg" name="image" required ></td>
</tr>
<tr>
</tr>
<tr>
<td>
</td><td style="text-align:center;" ><input type="submit" value="upload" name="upload">	</td>
</tr>
</table>
</form>
<center>
</body>
</html>
<?php
include "functions/config.php";
if(isset($_POST['upload']))
{
	$u=$_SESSION['username'];
	       $desc=$_POST['desc'];
		   $image=$_FILES['image']['name'];
		   $tmp=$_FILES['image']['tmp_name'];
		  move_uploaded_file($tmp,"posts_images/$image");
		   $query="insert into posts (username,`desc`,image) values('$u','$desc','$image');";
	$sql=mysqli_query($con,$query);
	if($sql)
	{
		echo "<script> alert('posted sucessfully'); location='index.php'; </script>";
	}


}
?>