<?php 
    session_start();

    function erzeugeLink($link){
        $zufall = "zahl_".rand(10000,99999);
        $_SESSION["link"][$zufall] = $link;
        return $zufall;
    }
?>

<html>
    <head>
    </head>
    <body>
        <form method="post" action="action.php">

            <input type="text" placeholder="Vorname" name="vorname" />

            <input type="submit" value="<?php echo erzeugeLink("andere_seite.php"); ?>" name="link">
            <input type="submit" value="<?php echo erzeugeLink("start_seite.php"); ?>" name="link">
            <input type="submit" value="<?php echo erzeugeLink("end_seite.php"); ?>" name="link">

            <input type="submit" />





        </form>
    </body>





</html>








<?php ?>