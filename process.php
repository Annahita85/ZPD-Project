<?php
session_start();
function insertUserData($name, $email, $password)
{
    $connection = new mysqli("10.100.5.220", "ben", "onlinewache", "ben_test1", "3306");

    $sql = "INSERT INTO tabellenname (name, email, pass) VALUES (?,?,?);";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss",$name,$mail,$pass);

    $stmt->execute();

    $result = $stmt->fetch();

    var_dump($stmt);
    return $stmt->rowCount();
}

include_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password'])) {
        if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['password'])) {
            # data is valid
        }
    }
}
// var_dump($_POST);exit;

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