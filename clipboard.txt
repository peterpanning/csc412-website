<?php
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['user_email']; // this is the sender's Email address
    $name = $_POST['user_name'];
    $subject = "New message to Code Too Mutch";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['user_message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: thank_you.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
