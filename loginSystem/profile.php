<?php

if (isset($_SESSION["useruid"])){
    echo "<p>Hello there ". $_SESSION["useruid"] . "</p>";
}
?>