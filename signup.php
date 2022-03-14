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

if (mysqli_num_rows($resault) > 0) {
    while ($row = mysqli_fetch_assoc($resault)){
        $userid = $row['id'];
        $sql = "INSERT INTO profileimg(userid , status) 
        VALUES ('$userid' , 1 )";
        mysqli_query ($conn , $sgl);
        header("Location: index.php");
    }
}else {
    echo "you have an Error";
}
