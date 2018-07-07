<?php
include 'functions/config.php';ini_set('max_execution_time', 3000);
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='login.php';</script>";
}


$u=$_GET['u'];

$img=$_GET['i'];
$user=$_SESSION['username'];

$not="$user has downloaded your file $img";
$query="insert into notification (id,username,notification,image) values ('','$user','$not','$img');";
$sql=mysqli_query($con,$query);




?>
<img src="posts_images/<?php echo $img; ?> " width="50%" height="50%">
</br>
<center>
<a href="posts_images/<?php echo $img; ?> " download><button> download </button></a>
</center>