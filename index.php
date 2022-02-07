<!DOCTYPE HTML>
<html>
    <head>
    <title>welcome to my Page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylpage.css">
    <link rel="stylesheet" href="csslogin.css"> 
     
    
    </head>
    <body>
        <div style="background-image: url('picpol.jpg'); background-repeat:no-repeat; 
        background-attachment: fixed;
        background-size: cover; width:1910px;height:1500px">
        
        <?php include("menu.html"); ?> 

            <br><br><br>
            <div>
                <?php include("login.html"); ?>

                <!-- create SQL -->
                
                <!-- <?php
                    $servername = "localhost";
                    $username = "username";
                    $password = "password";

                    $conn = new mysqli($servername, $username, $password);

                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    echo "Connected successfully";
                    ?>  -->
            </div>    
         </div>    
         

           
    </body>
</html>
