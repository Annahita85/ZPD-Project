<?php
   session_start(); 
   include_once'dbh.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       
    <?php

        if (isset($_SESSION['id'])) {
            if ($_SESSION['id'] == 1 ) {       #==1
                echo "You are logged in as user #1";
            }
            echo "<form action='upload.php' method='POST' enctrype='multipart/from-data'>
        
                    <input type='file' name='file'>
                    <button type=' submit' name='submit'>UP LOAD</button>
                    
                </form>";
        }else {
            echo "You are not login!";

            echo "<form action='login.php' method='POST'>
        
                    <input type='text' name='first' placeholder='First name....'>
                    <input type='text' name='email' placeholder='Email....'>
                    <input type='text' name='uid' placeholder='Username....'>
                    <input type='Password' name='pwd' placeholder='Password....'>
                    <button type='submit' name='submitsignup'>SIGN UP</button>
                    
                </form>";
        }

    ?>

       

        <p>Login as User!</p>
       <form action="login.php" method="POST">
            <button type="submit" name="submitlogin">Login</button>

       </form>

       <p>Logout as User!</p>
       <form action="logout.php" method="POST">
            <button type="submit" name="submitlogout">Logout</button>

       </form>



       <!-- <div class="article-countainer">
           
       </div> -->

    </body>
</html>