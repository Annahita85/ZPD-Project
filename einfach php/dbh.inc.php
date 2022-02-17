<?php

$serverName = "10.100.5.220";
$dBUsername = "ben";
$dBPassword = "onlinewache";
$DBName = "ben_test1";

$conn = mysqli_connect($serverName ,$dBUsername ,$dBPassword ,$DBName );

if (!$conn){
  die("connection Faild :". mysqli_connect_error());

}