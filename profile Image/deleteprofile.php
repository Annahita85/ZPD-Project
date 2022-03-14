<?php
session_start();

include_once'dbh.php';
$sessionid = $_SESSION['id'];

$filenam = "profile".$sessionid."*";
$fileinfo = glob($filenam);

$fileext = explode(".", $fileinfo[0]);
$fileactualext = $fileext[1];

$file = "profile".$sessionid.".".$fileactualext;

if (!unlike($file)) {
    echo "File was not deleted";
}else {
    echo "File was deleted";
}

$sql = "UPDATE profileimg SET status=1 WHERE userid='$sesssionid';";

mysqli_query($conn , $sql);

header("Location : index.php?deletedsuccess");