<?php
   session_start();

    $zufall_zahl = $_POST["link"];
    $link = $_SESSION["link"][$zufall_zahl];
    $_SESSION["link"] = array();

    $vorname = $_POST["vorname"];
    $_SESSION["name"] = $vorname;
    
    header('Location: '.$link);
?>