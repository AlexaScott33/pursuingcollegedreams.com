<?php
    if($_POST["submit"]) {
        $recipient="arscott4792@gmail.com";
        $subject="Form to email message";
        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];

        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

        $thankYou="<p>Thank you! Your message has been sent.</p>";
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pursuing College Dreams - Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.ico"/>
        
        <link rel="stylesheet" type="text/css" href="/css/reset.css">
        <link rel="stylesheet" type="text/css" href="/css/general.css">
        <link rel="stylesheet" type="text/css" href="/css/header.css">
        <link rel="stylesheet" type="text/css" href="/css/footer.css">
        <link rel="stylesheet" type="text/css" href="/css/contact/contact-hero.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700&display=swap" rel="stylesheet">
        <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    </head>
    <body>
        <script> 
            $(function(){
              $("#header").load("embeds/header.html");
              $("#contact-hero").load("embeds/contact/contact-hero.html");
              $("#footer").load("embeds/footer.html"); 
            });
        </script> 
    
        <div id="header"></div>

        <div id="contact-hero" class="contact-hero-container"></div>

        <form method="post" action="contact.php">
            <label>Name:</label>
            <input name="sender">

            <label>Email address:</label>
            <input name="senderEmail">

            <label>Message:</label>
            <textarea rows="5" cols="20" name="message"></textarea>

            <input type="submit" name="submit">
        </form>

        <div id="footer" class="footer-container"></div>
        
        <script src="" async defer></script>
    </body>
</html>