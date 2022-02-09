<!DOCTYPE HTML>
<html lamg="en">
    <head>
    <title>welcome to my Page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="stylpage.css">
    <link rel="stylesheet" href="csslogin.css"> 
     
    
    </head>
    <body>
        <!-- <div style="background-image: url('picpol.jpg'); background-repeat:no-repeat; 
        background-attachment: fixed;
        background-size: cover; width:1910px;height:1500px"> -->
        
            <?php include("menu.html"); ?> 

            <br><br><br>
            <div>
                <?php include("login.html"); ?>

                <!-- create SQL -->
                
                <?php
                    // $servername = "localhost";
                    // $username = "username";
                    // $password = "password";
                    // $dbname = "myDB";
                    
                    $verbindungZurDb = new PDO('mysql:host=10.100.5.220;dbname=ben_test1', 'ben', 'onlinewache');

                    $query = $verbindungZurDb->prepare('SELECT * FROM tabellenname LIMIT 100');
                    $execResult = $query->execute();
                    
                    $execResult = $verbindungZurDb->exec('SELECT * FROM tabellenname LIMIT 100');

                    $verbindungZurDb = new PDO('mysql:host=10.100.5.220:3306;dbname=ben_test1', 'ben', 'onlinewache');
                    
                    var_dump($query->fetchAll());
                    $res = $query-> fetchAll(PDO::FETCH_BOTH);


                    
                    // $conn = new mysqli($servername, $username, $password);
                    // if ($conn->connect_error) {
                    //     die("Connection failed 11: " . $conn->connect_error);
                    // }
                    // echo "<h4>Erfolgreich Verbindung </h4>";

                    // Insert to My SQL-------

                    //$sql = "INSERT INTO tabellenname (id , name ) VALUES ('47' , 'Jafari' )";
                    
                    // if ($conn->query($sql) ===TRUE){
                    //     echo "Neue Data eingefügt";
                    // } else {
                    //     echo "ERROR" . $sql . "<br>" . $conn->error;
                    // }
                    // $conn->close();

                    // $res = $verbindungZurDb->exec( '
                    //         INSERT INTO 
                    //             tabellenname 
                    //                 (id , name)
                    //             VALUES
                    //                 ('47' , 'Jafari' )
                    // ');

                    ?> 
            </div>    
         </div>    
         

           
    </body>
</html>
