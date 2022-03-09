<?php 

session_start();
session_unset();
session_destroy();


header("location:  ../einfach php/index.php");
exit();