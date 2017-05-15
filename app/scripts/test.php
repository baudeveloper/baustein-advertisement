<?php
    if($_POST) {
        $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
        $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
        $company_name = filter_var($_POST['company_name'], FILTER_SANITIZE_STRING);
        $email_address = $_POST['email_address'];
        $requirements = $_POST['requirements'];
        $to = "test@baustein.ca";
        $subject = "From $first_name -- Baustein Landing Page";
        $message = "Thanks, A form has been submitted.\nName: ".$first_name." ".$last_name."\nCompany Name: ".$company_name."\nEmail Address: ".$email_address."\nMessage: ".$requirements;
        mail($to, $subject, $message);
    }
?>