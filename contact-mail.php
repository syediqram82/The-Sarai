<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $city = $_POST['City'];
    $email = $_POST['Email'];
    $guests = $_POST['Guests'];
    $message = $_POST['Message'];

    // Create the email content
    $subject = "Form Submission from $name";
    $body = "Name: $name\nCity: $city\nEmail: $email\nNumber of Guests: $guests\nMessage: $message";

   
    // Replace your_email@example.com with the actual email address where you want to receive the form submissions
    $to = "reservation@thesarai.in";

    // Send the email and check if it was sent successfully
    $isMailSent = mail($to, $subject, $body);

    // Set the status in the redirect URL
    $status = ($isMailSent) ? "success" : "error";

    // Redirect back to the previous page with the status parameter
    header("Location: contact-us.html?status=$status");
    exit();
}
?>