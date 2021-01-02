<!DOCTYPE HTML>  
<html>
<head>
  <title>Log in</title>
  <link rel="stylesheet" href="../css/reg.css">

  <script>
    function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["pass"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (y == "") {
    alert("password must be filled out");
    return false;
  }
}
  </script>
  
</head>
<body> 
<div class="header">
<h2>Log in</h2>
</div>


<form name="myForm" method="post" action="" onsubmit="return validateForm()"> 
<div class="input-group"> 
Name: 
<input value="<?php if(isset($_COOKIE['name'])){
	echo $_COOKIE['name'];
	
}?> " type="text" name="name" />
  
  <br><br>
  </div>
  <div class="input-group"> 
  Password: <input type="password" name="pass" value="<?php if(isset($_COOKIE['pass'])){
	echo $_COOKIE['pass'];}?> " /><br>
  <br>
 
  <br><br>
  </div>
 
  <div class="input-group">
  
  
  <input type="checkbox" value="checked" name="remember" class="btn">Remember Me<br>

  <button type="submit" name="login" class="btn">Log in</button>
  <button type="submit" name="logout" class="btn" href="Logout.php">Log out</button>
  

 
  
  </div>
  <p>
    Not yet a member? <a href="Registration.php">Sign in</a>
  </p>
</form>



 </body>
</html> 