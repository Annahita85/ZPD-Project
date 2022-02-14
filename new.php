<?php

$name = "Robin";
$mail = "test@mail.de";
$pass = "tastatur";

$connection = new mysqli("10.100.5.220", "ben", "onlinewache", "ben_test1", "3306");

$sql = "INSERT INTO tabellenname (name, email, pass) VALUES (?,?,?);";

$stmt = $connection->prepare($sql);
$stmt->bind_param("sss",$name,$mail,$pass);

$stmt->execute();

$result = $stmt->fetch();

var_dump($stmt);

?>