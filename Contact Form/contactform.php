<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailform = $_POST['mail'];
    $massage = $_POST['message'];


    $mailTo = "arnika20207@gmail.com";
    $headers = "From: ".$mailform;
    $txt = "You have recived an Email from".$name.".\n\n".$message;

    mail($mailTo , $subject , $txt , $headers);
    header("Location: index.php?mailsend");
}