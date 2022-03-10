<?php

    include_once 'dbh.php';

    $first = $_POST['first'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];


   $sql = "INSERT INTO user (userName , userEmail , UsersUid , usersPwd) VALUES ('$first' , '$email' , '$uid' , '$pwd')";

   mysqli_query($conn , $sql);

   header("Location:index.php?signup=success");



   