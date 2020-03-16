<?php
    // $firstNameErr  = "";
    // $lastNameErr  = "";
    // $ageErr  = "";
    // $emailErr = "";

    if($_POST["submit"]) {
        $recipient="arscott4792@gmail.com";
        $subject="Form to email message";
        $senderFirstName=$_POST["senderFirstName"];
        $senderLastName=$_POST["senderLastName"];
        $senderAge=$_POST["senderAge"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];
        $headers = "From: $senderFirstName $senderLastName <$senderEmail>";

        // if (empty($senderFirstName)) {
        //     $firstNameErr = "First name is required";
        // }

        // if (empty($senderLastName)) {
        //     $lastNameErr = "Last name is required";
        // }

        // if (empty($senderAge)) {
        //     $ageErr = "Age is required";
        // }

        // if (empty($senderEmail)) {
        //     $emailErr = "Email is required";
        // }

        $mailBody="Name: $senderFirstName $senderLastName\nAge: $senderAge\nEmail: $senderEmail\n\n$message";

        mail($recipient, $subject, $mailBody, $headers);

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

                <div class="flex-input-container mb-40">
                    <div class="first-name-input name-input">
                        <label class="mb-10">First Name <span class="error">* </span></label>
                        <input name="senderFirstName">
                    </div>

                    <div class="last-name-input name-input">
                        <label class="mb-10">Last Name <span class="error">* </span></label>
                        <input name="senderLastName">
                    </div>
                </div>
                
                <div class="flex-input-container">
                    <div class="age-input name-input">
                        <label class="mb-10">Age <span class="error">* </span></label>
                        <input name="senderAge">
                    </div>
                    
                    <div class="email-input name-input">
                        <label class="mb-10">Email Address <span class="error">* </span></label>
                        <input name="senderEmail">
                    </div>
                </div>
                
                <div class="message-input mt-40">
                    <label class="mb-10">Message</label>
                    <textarea rows="5" cols="20" name="message"></textarea>
                </div>

                <div class="submit-input mt-40"> 
                    <input type="submit" name="submit">
                </div>
                
            </form>
        </div>

        <div id="footer" class="footer-container"></div>
        
        <script src="" async defer></script>
    </body>
</html>