<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $arrivalDate = $_POST['arrivalDate'];
    $checkoutDate = $_POST['checkoutDate'];
    $guests = $_POST['guests'];
    $email = $_POST['email'];

    // Perform any additional validation or processing here

    // Create the email content or save the data to a database
    $subject = "New Hotel Booking from $name";
    $body = "Name: $name\nArrival Date: $arrivalDate\nCheckout Date: $checkoutDate\nNumber of Guests: $guests\nEmail: $email";

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