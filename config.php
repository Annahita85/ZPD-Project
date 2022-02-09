<?php

$database = define("DSN" , "mysql:host=10.100.5.220;dbname=ben_test1', 'ben', 'onlinewache");

// try { 
//     $db = new PDO("mysql:host={$database['localhost']};dbname={$database['tabellename']}", $database['ben'], $database['onlinewache']); 
// } catch (PDOException $e) { 
//     die("An error happend, Error: " . $e->getMessage()); 
// }

try{
    $db = new pdo('mysql:host=10.100.5.220;port=3306;dbname=tabellename;charset=utf8','ben','onlinewache',array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
    }catch(PDOException $pe){
        echo $pe->getMessage();
    }
?>