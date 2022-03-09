
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>
    <p>Erste Page</p>

    <nav>
        <div >
                <ul class="mydiv">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About me">About me</a></li>
                    <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<li><a href='profile.php'>Profile Page</li>";
                        echo "<li><a href='logout.inc.php'>Logout</li>";
                    }
                    else{
                        echo "<li><a href='signup.php'>sign up</li>";
                        echo "<li><a href='login.php'>log in</li>";
                    }
                    ?>
                 </ul> 

        </div>

    </nav>    

</body>
</html>