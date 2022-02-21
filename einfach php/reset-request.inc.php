<?php
if (isset($_POST["reset-request-submit"])) {
    
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "www.mmtuts.net/forgottenpwd/create-password.php?selector=". $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    require 'dbh.inc.php';

    $userEmail = $_POST["email"];

    $sql = "DELET FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmst_init($conn);
    if (!mysqli_stmt_prepare($stmt , $sql)) {
        echo "There was an ERROR!";
        exit;
    }else {
        mysqli_stmt_bind_param($stmst , "s",$userEmail);
        mysqli_stmt_execute($stmt);

    }
    $sql = "INSERT INTO pwdReset(pwdResetEmail , pwdResetSelector , pwdResetToken , pwdResetExpires) VALUES (?,?,?,?);";
    $stmt = mysqli_stmst_init($conn);
    if (!mysqli_stmt_prepare($stmt , $sql)) {
        echo "There was an ERROR!";
        exit;
    }else {
        $hashedToken = passsword_hash($token , PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmst , "ssss",$userEmail , $selector , $hashedToken , $expires);
        mysqli_stmt_execute($stmt);
        
    }

    mysqli_stmt_close($stmt);
    mysqli_close();

    $to = $userEmail ;
    $subject = 'Reset your Password for mmtuts';

    $message = '<p> We recive a Password reset Request . </p> ';
    $message .= '<p>Here is your password reset Link: </br>';
    $message .='<a href= "' . $url . '">' . $url . '<a></p>';

    $headers = "From : mmtuts <usemmtuts@gmail.com>\r\n";
    $headers .= "Replay-To :usemmtuts@gmail.com\r\n";

    $headers = "Content-type : text/html\r\n";

    mail($to , $subject , $message , $headers);

    header("Location:./reset-password.php?reset=success");
    
    
    



}else {
    header("location: index.php");
}