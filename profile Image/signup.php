<?php
include_once 'dbh.php';

$first = $_POST['first'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user(userName , userEmail, userUid, userPwd) 
        VALUES ($first , $emai , $uid , $pwd )";
mysqli_query ($conn , $sgl);

$sql = "SELECT * FROM user WHERE userName= '$uid' AND first='$first'"; 
$resault = mysqli_query ($conn , $sgl);

if (condition) {
    # code...
}
