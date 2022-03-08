<?php
include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
       <?php
        $sql = "SELECT * FROM user;";
        $result =  mysqli_query($conn , $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row =  mysqli_fetch_assoc($result)){
                echo $row['usersUid']. "<br>";
            }
        }
       ?> 
    </body>
</html>