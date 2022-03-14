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

        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn , $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               $id = $row['id'];
               $sqlimg = "SELECT * FROM profileimg WHERE userid ='$id'";
               $resultimg= mysqli_query($conn , $sqlimg);
               while ($rowimg = mysqli_fetch_assoc($resultimg)) {
                   echo "<div class =user-container'>";
                        if ($rowimg ['status'] == 0) {
                            $filenam = "profile".$sessionid."*";
                            $fileinfo = glob($filenam);

                            $fileext = explode(".", $fileinfo[0]);
                            $fileactualext = $fileext[1];
                            echo "<img src='uploads/profile".$id.".".$fileactualext."?".mt_rand().">";
                        }else {
                            echo "<img scr='uploads/profiledefault.jpg'>";
                        }
                        echo "<p>". $row['username']."</p>";
                   echo "</div>";
               }
            }
        } else {
            echo"There are no User yet!";
        }   

        if (isset($_SESSION['id'])) {
            if ($_SESSION['id'] == 1 ) {       #==1
                echo "You are logged in as user #1";
            }
            echo "<form action='upload.php' method='POST' enctrype='multipart/from-data'>
        
                    <input type='file' name='file'>
                    <button type=' submit' name='submit'>UP LOAD</button>
                    
                </form>";
            echo "<form action='deleteprofile.php' method='POST'>
    
                    <button type=' submit' name='submit'>Delet profile image</button>
            
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