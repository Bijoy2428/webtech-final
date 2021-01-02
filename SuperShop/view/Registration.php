
<?php

error_reporting(E_ERROR/E_PARSE);


?>

<!DOCTYPE HTML>  
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="../css/reg.css">
  
  <style>
  .error {color: #FF0000;}
</style>
</head>
<body>  


<?php


$nameErr = $emailErr = $genderErr  = $numberErr = $addressErr = $passErr = "";
$name = $email = $gender =  $number = $address = $pass =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if(empty($_POST["password"])){
    $pass = test_input($_POST["password"]);
    
    if (strlen($_POST["password"]) <= '8') {
        $passErr = "Your Password Must Contain At Least 8 Characters!";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["number"])) {
    $numberErr = "Number is required";
  } else {
    $number = test_input($_POST["number"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="header">
<h2>REGISTRATION</h2>
</div>

<p><span class="error"></span></p>
<form method="post" action="Registration.php"> 
<div class="input-group">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  </div>
  <div class="input-group"> 
  Password: <input type="password" name="pass">
  <span class="error">* <?php echo  $passErr;?></span>
  <br><br>
  </div>
  <div class="input-group"> 
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  </div>
  <div class="input-group"> 
  Mobile Number:  
  <input type="mobile" name="number">     
  <span class="error">* <?php echo $numberErr;?></span>
  <br><br>
  </div>
  <div class="input-group"> 
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  </div>
  <div class="input-group">
  Address:
  <input type="text" name="address">
  <span class="error">* <?php echo $addressErr;?></span>
  </div>
  <div class="input-group">
  
  <button type="submit" name="registration" class="btn">Log in</button>
  </div>
  <p>
    Already a member? <a href="Login.php">Sign in</a>
  </p>
</form>



 </body>
</html>



 </body>
</html>
