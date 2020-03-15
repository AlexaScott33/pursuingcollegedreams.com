<?php
    $nameErr  = "";

    if($_POST["submit"]) {
        $recipient="arscott4792@gmail.com";
        $subject="Form to email message";
        $senderFirstName=$_POST["senderFirstName"] . ' ' . $_POST["senderLastName"];
        $senderLastName=$_POST["senderLastName"];
        $senderAge=$_POST["senderAge"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];

        if (empty($senderFirstName)) {
            $nameErr = "Name is required";
          }

        $mailBody="Name: $senderFirstName $senderLastName\nAge/Grade: $senderAge\nEmail: $senderEmail\n\n$message";

        mail($recipient, $subject, $mailBody, "From: $senderFirstName $senderLastName <$senderEmail>");

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
        <link rel="stylesheet" type="text/css" href="/css/contact/contact-form.css">
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
        
        <div class="form-content-container">
            <form method="post" action="contact.php">
                <div class="first-name-input">
                    <label>First Name <span>*</span></label>
                    <input name="senderFirstName"> <span class="error">* <?php echo $nameErr;?></span>
                </div>

                <div class="last-name-input">
                    <label>Last Name <span>*</span></label>
                    <input name="senderLastName">
                </div>
                
                <div class="age-input">
                    <label>Age/Grade <span>*</span></label>
                    <input name="senderAge">
                </div>
                
                <div class="email-input">
                    <label>Email address <span>*</span></label>
                    <input name="senderEmail">
                </div>
                
                <div class="message-input">
                    <label>Message <span>*</span></label>
                    <textarea rows="5" cols="20" name="message"></textarea>
                </div>
            
                <input type="submit" name="submit">
            </form>
        </div>

        <div id="footer" class="footer-container"></div>
        
        <script src="" async defer></script>
    </body>
</html>