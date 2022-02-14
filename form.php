
<!DOCTYPE HTML>  
  <html>
    <head>
    <title>Form Page </title>
    <link rel="stylesheet" href="stylpage.css">
    </head>
    <body>  
     <?php include("menu.html"); ?>  
  <br><br><br>  
<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$nameErr = $emailErr = $genderErr = $passErr =$confErr= "";
$name = $email = $gender = $password = $confirm =  "";

//if (!empty($_POST)){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
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
   

  if (empty($_POST["password"])) {
    $password = "";
    $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
    // $option = [
    //   "cost" => "10"
    // ];
   
    // echo password_hash($password , PASSWORD_BCRYPT , $option);         //password Hashing
  } else {
    $passErr = test_input($_POST["password"]);
  }

  if (empty($_POST["confirm"]) && $confirm == $password) {
    $confirm = "" ;
  } else {
    $$confErr = test_input($_POST["confirm"]);
  }
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


?>

<h2>Responsive Form</h2>
<br><br>
<p><span class="error">* Error!Invalid Input</span></p>
<br><br>
    <div class="container">
      <form method="post" action="process.php">  
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name :</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="name" placeholder="Your name.." value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
          </div>
        </div>


        
        <br><br>
        <!-- E-mail: <input type="text" name="email" value="<?php echo $email;?>">-->
        <div class="row">
          <div class="col-25">
            <label for="email">Email :</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" name="email" placeholder="Your Email...">
            <span class="error">* <?php echo $emailErr;?></span>
          </div>
        </div>

        
        <br><br>
        
        
        <div class="row">
          <div class="col-25">
            <label for="pass">Password :</label>
          </div>
          <div class="col-75">
            <input type="text" id="password" name="password" placeholder="Your password..">
            <span class="error">* <?php echo $passErr;?></span>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-25">
            <label for="confirm">Confirm Password :</label>
          </div>
          <div class="col-75">
            <input type="text" id="confirm" name="confirm" placeholder="Confirm Your password..">
            <span class="error">* <?php echo $confErr;?></span>
          </div>
        </div>

        <br><br>
        <!-- Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <span class="error">* <?php echo $genderErr;?></span> -->
        <br><br>
        <input type="submit" name="submit" value="Submit">  
      </form>
    </div>  
    <div class="output">
      <?php
      echo "<h2>Your Input:</h2>";
      // echo "<br>";
      // echo "your Name : ".$name;
      // echo "<br>";
      // echo "your Email : ".$email;
      // echo "<br>";
      // echo "Gender : ".$gender;
      print_r($_POST);
      ?>
    </div> 
  </body>
<br><br>
<footer class="footer">
    <a href="index.php" class="backbottom">Back to Homepage</a>
</footer>

</html>
