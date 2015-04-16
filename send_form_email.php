<?php
$email_to = "ushau878@gmail.com";
$email_subject = "Enquiry from somerealestate.com";
$first_name = $_POST['InputFirstName']; 
$last_name = $_POST['InputLastName']; 
$email_from = $_POST['InputEmail']; 
$telephone = $_POST['InputPhone']; 
$property_type = $_POST['InputPropertyType'];
$beds = $_POST['InputBeds'];
$baths = $_POST['InputBaths'];
$price_range=$_POST['InputPriceRange'];
$message = $_POST['InputMessage'];

$email_message = "Form details below.\n\n";


function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

$email_message .= "First Name: ".clean_string($first_name)."\n";
$email_message .= "Last Name: ".clean_string($last_name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Telephone: ".clean_string($telephone)."\n";
$email_message .= "Property Type: ".clean_string($property_type)."\n";
$email_message .= "Beds: ".clean_string($beds)."\n";
$email_message .= "Baths: ".clean_string($baths)."\n";
$email_message .= "Pirce Range: ".clean_string($price_range)."\n";
$email_message .= "Comments: ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
<!-- include your own success html here -->
Thank you for contacting us. We will be in touch with you very soon.
<?php
header('Location: ' . "thankyou.html");
?>
