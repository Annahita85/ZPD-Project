<section classs="signup_form">
    <h1>Log IN</h1>
    <form action ="login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
    </form>

    <a href="reset-password.php">Forgot your password?</a>
    <?php
        if (isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "wrongloginpwd"){
                echo "<p>Incorrect login information</p>";
            }
            else if ($_GET["error"] == "wrongloginuid"){
                echo "<p>No user found</p>";
            }
            
            
        }

    ?>
</section>    
    
    