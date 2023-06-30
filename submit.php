<?php
if (isset($_POST['submit'])) {
    $jobTitle = $_POST['job_title'];
    $companyName = $_POST['company_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Additional fields can be accessed using $_POST['field_name']

    // Configure your email settings
    $to = 'dimanluck0815@gmail.com'; // Replace with your email address
    $subject = 'Job Application';
    $message = "Job Title: $jobTitle\n"
        . "Company Name: $companyName\n"
        . "Name: $name\n"
        . "Email: $email\n";

    // Send the email
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email.';
    }
}
?>
