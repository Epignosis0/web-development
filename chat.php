<!doctype>
<html>
<?php
include 'functions/config.php';ini_set('max_execution_time', 3000);
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='login.php';</script>";
}

?>
<head>
<title>
website
</title>
<link rel="stylesheet" href="styles/style.css" media="all" >
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="container">
<div class="jumbotron">

  <h1>HI <?php echo $_SESSION['username'];?></h1> 
  <p><a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">logout</a></p> 
  <p><a data-toggle="tooltip" data-placement="top" title="Logout" href="pass.php">Change password</a></p> 
  
</div>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 
</head>
<body>
<div class="menu" >
<ul>
	<li><a href="index.php" >HOME </a> </li>
	<li><a href="index.php" >Posts </a> </li>
	
	<li><a href="post_insert.php" >new post</a> </li>
	<li><a href="pass.php" >Change password</a> </li>
	<li><a href="logout.php" >LOGOUT</a> </li>

	</ul>
	
	
</div>


<div id="sidebar" > 
<div id="side_title" >
	Chats
	</div>
	<div id="cats" >
	<ul>
	<?php
	include ("functions/functions.php");
	 getuser();
	?>
	</ul>
	</div>
	

</div>

<div id="content_area">
<div  id='msg'  style='background-color:white; margin:20px;' >
<?php  getmsg();
?> 
</div>
</div>
<div class="footer ">
<p>&#169; copy Rights owned by Narasimha </br>  &#932; thank you</p></div>

</body>

</html>
