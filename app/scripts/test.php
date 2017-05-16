<?php
    if($_POST) {
        $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
        $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
        $company_name = filter_var($_POST['company_name'], FILTER_SANITIZE_STRING);
        $email_address = $_POST['email_address'];
        $requirements = $_POST['requirements'];
        $headers = 'From: webmaster@baustein.ca' . "\r\n" .
                   'Reply-To: webmaster@baustein.ca' . "\r\n" .
                   'Content-Type: text/html; charset=ISO-8859-1' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        $to = "baustein.design@gmail.com, davidt@baustein.ca";
        // $to = "billgates@gmail.com, linustorvalds@gmail.com";
        $subject = "New form submission from Wealth Management Landing page";
        $message = "This mail is to notify you that <b>".$first_name." ".$last_name."</b> recently submitted a form on Baustein's Wealth Management landing page.<hr>Name: ".$first_name." ".$last_name."<br>Company Name: ".$company_name."<br>Email Address: ".$email_address."<br>Message: ".$requirements;
        mail($to, $subject, $message, $headers);
    }
?>