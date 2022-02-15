	
<?php 
// session_start();
// $pdo = new PDO('mysql:host=10.100.5.220;dbname=ben_test1', 'ben', 'onlinewache');
?>

<?php

$showFormular = true; 
 
if(isset($_GET['register'])) {
    $error = false;
    $email = $_POST['name'];
    $passwort = $_POST['password'];
    
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $error = true;
    }     
    if(strlen($passwort) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $error = true;
    }
    
    
    //ob Email ist verfügber
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM tabellenname WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
            $error = true;
        }    
    }
    
    //No Error user registering
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO tabellenname (email, passwort) VALUES (:email, :passwort)");
        $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));
        
        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="form.php">form Page</a>';
            $showFormular = false;
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    } 
}
?>
<br><br><br>
  <div class="login">
    <h1>Login </h1>
    <form method="post" action="?register">
      <p><input type="text" name="name" value="" placeholder="Username or Email"></p>
      <p><input type="password" name="password" value="" placeholder="Password"></p>
      <p class="remember_me">
        <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          Remember me
        </label>
      </p>
      <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
  </div>
  
  <div class="login-help">
    <p>Forgot your password? <a href="#">Click here to reset your Password</a>.</p>
  </div>

