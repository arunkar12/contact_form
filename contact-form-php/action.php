<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $message= $_POST['mobile'];

    // Email information
    $to = "arunkarthik.n@niraltek.com";
    $subject = "New Contact Form Submission";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message; "\r\n Mobile Number =" . $Number;

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?> -->

<?php
phpinfo()
?>