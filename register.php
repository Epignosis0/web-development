<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>







<form class="form-horizontal"  action=" " method="post">
<fieldset>

<!-- Form Name -->
<legend>Registration Form</legend>

<!-- Text input-->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ln">UserName</label>  
  <div class="col-md-4">
  <input id="ln" name="name" type="text" placeholder="Name" class="form-control input-md" required>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="ln">Password</label>  
  <div class="col-md-4">
  <input id="ln" name="password" type="password" placeholder="Password" class="form-control input-md" required>
    
  </div>
</div>






<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="email" class="form-control input-md" required>
    
  </div>
</div>







<!-- Text input-->


<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Training">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Training-0">
      <input type="radio" name="Training" id="Training-0" value="male" >
      Male
    </label> 
    <label class="radio-inline" for="Training-1">
      <input type="radio" name="Training" id="Training-1" value="female">
      Female
    </label>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  </div>
</div>

</fieldset>
</form>
<?php
include ("functions/functions.php");
register();
?>
