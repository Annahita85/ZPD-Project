<?php
    if (isset($_POST["rest-password-submit"])) {

        $selector = $_POST["selector"];
        $validator = $_POST["validator"];
        $password = $_POST["pwd"];
        $passwordRepeat = $_POST["pwd-repeat"];

        if (empty($password) || empty($passwordRepeat)) {
            header("Location: creat-new-password.php?newpwd=empty");
            exit();
        } else if ($password !=$passwordRepeat) {
            header("Location: creat-new-password.php?newpwd=pwdnotsame");
            exit();
        }

        $currentData = date("U");

        require 'dbh.inc.php';
        $sql = "SELECT + FROM pwdReset WHERE pwdResetSelector=? And pwdResetExüires >=?";
        $stmt = mysqli_stmst_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            echo "There was an ERROR!";
            exit();

        }else {
            mysqli_stmt_bind_param($stmt , "s" , $selector);
            mysqli_stmt_execute($stmt);
            #include $currentData

            $result = mysqli_stmst_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                echo "you need to re-submit your reset request.";
                exit();
            }else {
                
                $tokenBin =hex2bin($validator);
                $tokenCheck = password_verify($tokenBin , $row["pwdResetToken"]);

                if($tockenCheck === false){
                    echo "You need to re-submit your reset password.";
                    exit();

                } elseif ($tockenCheck === true ) {

                    $tokenEmail = $row['pwdResetEmail'];

                    $sql = "SELECT * FROM user WHERE emailUsers=?;";
                    $stmt = mysqli_stmst_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        echo "There was an ERROR!";
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt , "s", $tockenEmail);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmst_get_result($stmt);
                        if (!$row = mysqli_fetch_assoc($result)) {
                            echo "There was an ERROR!.";
                            exit();
                        }else {
                           
                            $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?";
                            $stmt = mysqli_stmst_init($conn);
                            if (!mysqli_stmt_prepare($stmt,$sql)) {
                                echo "There was an ERROR!";
                                exit();
                            } else {

                                $newPwdHash = password_hash($password , PASSWORD_DEFAULT);
                                mysqli_stmt_bind_param($stmt , "ss", $tockenEmail , $tockenEmail);
                                mysqli_stmt_execute($stmt);

                                $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                                $stmt = mysqli_stmst_init($conn);
                                if (!mysqli_stmt_prepare($stmt , $sql)) {
                                    echo "There was an ERROR!";
                                    exit;
                                }else {
                                    mysqli_stmt_bind_param($stmst , "s",$tockenEmail);
                                    mysqli_stmt_execute($stmt);
                                    header("Location: signup.php?newpwd=passwordupdated");
                            
                                }

                            }

                        }


                    }
                }
            }
        }

    } else {
        header ("Location:..index.php");
    }
?>