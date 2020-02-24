<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "paulcassell221@outlook.com";
    $headers = "From: ".$emailAddress;
    $txt = "You have received an email from ".$firstName.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}