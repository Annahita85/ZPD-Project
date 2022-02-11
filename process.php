<?php

print_r($_POST);

include_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password'])) {
        if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['password'])) {
            # data is valid
        }
    }
}

try{
    $db = new PDO('mysql:host=10.100.5.220;port=3306;dbname=tabellename;charset=utf8','ben','onlinewache',array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
    }catch(PDOException $e){
        echo $e->getMessage();
    }


function insertUserData($name, $email, $password)
{
    global $db;
    $sql = "INSERT INTO tabellename (name, email, password) VALUES (:fname, :email, :password)";
    $stmt = $db->prepare($sql);
    $stmt->execute([':name' => $name, ':email' => $email, ':password' => $password]);
    return $stmt->rowCount();
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password'])) {
        if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['password'])) {
            $result = insertUserData($_POST['name'], $_POST['email'], $_POST['password']);
            if ($result) {
                header('location: index.php?s=1');
                exit;
            } else {
                header('location: index.php?s=0');
                exit;
            }
        }
    }
}
?>