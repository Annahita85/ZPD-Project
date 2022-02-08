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
                
                <?php
                    $servername = "localhost";
                    $username = "username";
                    $password = "password";
                    $dbname = "myDB";

                    $conn = new mysqli($servername, $username, $password);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    echo "<h4>Erfolgreich Verbindung </h4>";

                    // Insert to My SQL-------

                    $sql = "INSERT INTO MyGuests (firstname , lastname , email) VALUES ('Anna' , 'Jafari' , 'arnika20207@gmail.com')";

                    if ($conn->query($sql) ===TRUE){
                        echo "Neue Data eingefügt";
                    } else {
                        echo "ERROR" . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();

                    ?> 
            </div>    
         </div>    
         

           
    </body>
</html>
