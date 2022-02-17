<?php
if (isset($_POST["submit"])){

    $username = $_POST["pwd"];
    $username = $_POST["pwd"];


    require_once'dbh.inc.php';
    require_once'function.inc.php';


    if (emptyInputlogin($username ,$pwd)!== false){
        header("location: ../einfach php/login.php?error=emptyinput"); 
        exit();  
    }

    loginUser($conn ,$username ,$pwd);

}

else {
    header("location: ../einfach php/login.php");  
}