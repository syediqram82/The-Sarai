<?php
$EmailTo = "syediqram82@gmail.com"; // Set the email address where you want to receive form submissions
$Subject = "Testing This one";

// Retrieve form data
$Name = isset($_POST['name']) ? $_POST['name'] : "";
$City = isset($_POST['City']) ? $_POST['City'] : "";
$Email = isset($_POST['Email']) ? $_POST['Email'] : "";
$Guests = isset($_POST['Guests']) ? $_POST['Guests'] : "";
$Message = isset($_POST['Message']) ? $_POST['Message'] : "";

// Prepare email body text
$Body = "Name: $Name\n";
$Body .= "City: $City\n";
$Body .= "Email: $Email\n";
$Body .= "Number of Guests: $Guests\n";
$Body .= "Message: $Message\n";

// Send email
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// Redirect to success or error page
if ($success) {
    header("Location: contactthanks.php?status=success");
    exit();
} else {
    header("Location: contactthanks.php?status=error");
    exit();
}
?>
