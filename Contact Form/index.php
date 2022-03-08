<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Form</title>
    </head>
    <body>
        <main>
            <p>SEND E-MAIL</p>
            <form action="contactform.php" method="POST"></form>
                <input type ="text" name="name" placeholder="Full name....">
                <input type ="text" name="mail" placeholder="Your Email....">
                <input type ="text" name="subject" placeholder="Subject....">
                <textarea name="massage" placeholder="Message"></textarea>
                <button type="submit" name="submit">SEND EMAIL</button>
            </form>
        </main>
    </body>
</html>