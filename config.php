<?php

// $database = define("DSN" , "mysql:host=10.100.5.220;dbname=ben_test1', 'ben', 'onlinewache");

// try { 
//     $db = new mysqli("10.100.5.220", "ben", "onlinewache", "ben_test1", "3306");; 
// } catch (PDOException $e) { 
//     die("An error happend, Error: " . $e->getMessage()); 
// }

// try{
//     $db = new PDO('mysql:host=10.100.5.220;port=3306;dbname=tabellename;charset=utf8','ben','onlinewache',array(
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     ));
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
?>

<?php

define('DB_SERVER', 'host=10.100.5.220');
define('DB_USERNAME', 'ben');
define('DB_PASSWORD', 'onlinewache');
define('DB_NAME', 'tabellenname');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>