<main>
    <h1> Reset your Password</h1>
    <p>An email will be send to you with instructions on how to reset your Password.</p>
    <form action="./reset-password.inc.php" method="post">
        <input type="text" name="email" placeholder="Enter your Email adresse.....">
        <button type="submit" name="reset-request-submit">Receive new Password by email</button>
    </form>

    <?php
        if (isset($_GET["reset"])) {
            if ($_GET["reset"] == "success") {
                echo '<p> Check your Email!</p>';
            }
        }

    ?>