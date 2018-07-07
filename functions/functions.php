<?php
include "config.php";



function register()
{
	global $con;
	if(isset($_POST['submit']))
	{
		$username=$_POST['name'];
		$password=$_POST['password'];
		$gender=$_POST['Training'];
		$email=$_POST['email'];
		
	$query="insert into login (username,password,email,gender) values('$username','$password','$email','$gender');";
	$sql=mysqli_query($con,$query);
	
	if($sql)
	{
		echo "<script type='text/javascript'>alert('user created sucessfully..'); location='login.php';</script>";
	}
}
}



function getuser()
{
	global $con;
	$query="select username from login";
	$sql=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($sql))
	{
		$mem=$row['username'];
		echo "
			<li><a href='chat.php?u=$mem' > $mem </a></li>
			";
			
	}
}
function getposts()
{
	global $con;
	$query="select * from posts order by `s.no` DESC";
	$sql=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($sql))
	{
		$u=$row['username'];
		$desc=$row['desc'];
		$img=$row['image'];
		echo "<div id='user'>
			 posted by $u
			
			</div>
			<div id='desc'>
			 $desc
			</div>
			<div id='img' >
			<img src='posts_images/$img' width='50%' >
			
			</div>";
			echo "</br>";
		echo "<a href='download.php?u=$u&i=$img' >download</a>"; 
	
			
}
}
function getnot()
{
	global $con;
	$user=$_SESSION['username'];
	$query="select * from notification where username='$user';";

	$sql=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($sql))
	{
		$not=$row['notification'];
		$img=$row['image'];
		echo " <center><div style='font-weight:bold;
	text-transform:capitalize;
	font-family:comic sans ms;
	margin:5px; color:green;
	'>
		<img src='posts_images/$img' width='180px;' height='180px'>
		</br>
		</br>
		$not
		
		</div></center><hr>";
	}
}
function getmsg()
{
	global $con;
	$dest=$_GET['u'];
	$user=$_SESSION['username'];
	$query="select * from chats where (`source`='$user' and dest='$dest')  or (`source`='$user' and dest='$dest') order by ddtt";
	
	
	$sql=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($sql))
	{
		$s=$row['source'];
		$d=$row['dest'];
		$m=$row['msg'];
		echo $s;
		echo $d;
		echo $m;
		
	}
}
?>
