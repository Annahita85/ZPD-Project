
    <?php
        $selector = $_GET["selector"];
        $selector = $_GET["validator"];

        if (empty($selector) || empty($validator) ) {
            echo "Could not validate your request!";
        } else {
            if (ctype_xdigit($selector) !==false && ctype_xdigit($validator) !==false) {
                ?>
                
                <form action="reset-password.inc.php" method="POST">
                        <input type="hidden" name="$selector" values="<?php echo $selector?>"> ;
                        <input type="hidden" name="$validator" values="<?php echo $validator?>"> ;
                        <input type="password" name="pwd" placeholder="Enter a new Password...">;
                        <input type="pasword" name="pwd-repeat" placeholder="Repeat a new Password again..."> ;
                        <button type="submit" name="reset-password-submit">Reset password</button>;



                </form>

                <?php
            }
        }



    ?>

