<section class="signup-form">
    <form action="signup.inc.php" method="post">
        <input type="text" name="name" placeholder="full name....">
        <input type="text" name="email" placeholder="Email....">
        <input type="text" name="uid" placeholder="User Name....">
        <input type="password" name="pwd" placeholder="Password....">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password....">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
        if (isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invalidUid"){
                echo "<p>choose a proper username</p>";
            }
            else if ($_GET["error"] == "invalidemail"){
                echo "<p>choose a proper email</p>";
            }
            else if ($_GET["error"] == "passworddontmatch"){
                echo "<p>Password dosnt match</p>";
            }
            else if ($_GET["error"] == "stmtfaild"){
                echo "<p>Something went wrong ,try again</p>";
            }
            else if ($_GET["error"] == "usernametaken"){
                echo "<p>Username already taken</p>";
            }
            else if ($_GET["error"] == "none"){
                echo "<p>you have signed up!</p>";
            }
        }

    ?>
    
</section>


