<?php
	if(isset($_POST['submit'])) {

    $to = "tej@baustein.ca";
    $from = $_POST['email_address'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $phone_number = $_POST['phone_number'];
    $company_name = $_POST['company_name'];
    $company_website = $_POST['company_website'];
    $subject = "Baustein Landing Page - Form submission";
    $subject2 = "Baustein Landing Page - Form submission";

    $message = "Name: ".$first_name." ".$last_name."\nEmail: ".$email_address."\nPhone: ".$phone_number."\nCompany Name: ".$company_name."\nCompany Website: ".$company_website."\n";
    $message2 = "Name: ".$first_name." ".$last_name."\nEmail: ".$email_address."\nPhone: ".$phone_number."\nCompany Name: ".$company_name."\nCompany Website: ".$company_website."\n";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);

  }
?>
