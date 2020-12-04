<?php


if (isset($_POST['i_name'])) {
    $to = 'info@datinnovations.com'; 
    $subject = 'Message from contact form on datinnovations.com';
    $email_from = "info@datinnovations.com";

    $name = $_POST['i_name'];
    $date = $_POST['i_date'];
    $email = $_POST['i_email'];
    $phone = $_POST['i_phone'];

    $street_address = $_POST['i_street-address'];
    $street_address_2 = $_POST['i_street-address-2'];
    $locality = $_POST['i_locality'];
    $region = $_POST['i_region'];
    $postal_code = $_POST['i_postal-code'];
    $country = $_POST['i_country'];

    $investment = $_POST['i_investment'];

    $message = 
    "
    Name: ".$name."
    Date of birth: ".$date."
    Email: ".$email."
    Phone number: ".$phone."

    Address: ".$street_address."
    Address 2: ".$street_address_2."
    City: ".$locality."
    State: ".$region."
    ZIP code: ".$postal_code."
    Country: ".$country."

    Investment: ".$investment."
    ";


    
    $headers = 'From: '.$email_from."\r\n".
    'Content-Type: text/plain; charset=UTF-8' . "\r\n" .
    'Para: WebSite'  .  "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    mail($to, $subject, $message, $headers);
    
}
else{
    echo "Access denied";
}


?>