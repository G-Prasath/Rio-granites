<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $stones = $_POST['stones'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Instantiate PHPMailer and configure SMTP
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                            // Use SMTP
        $mail->Host       = 'smtp.gmail.com';       // Set the SMTP server
        $mail->SMTPAuth   = true;                   // Enable SMTP authentication
        $mail->Username   = 'riogranites@gmail.com'; // SMTP username (your email)
        $mail->Password   = 'ejbxroipxqigkytu';        // SMTP password (or app password)
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption
        $mail->Port       = 587;                    // TCP port to connect to

        // Recipients
        $mail->setFrom("riogranites@gmail.com", "Enquiry Mail");              // Set the sender's email and name
        $mail->addAddress('riogranites@gmail.com'); // Add your recipient's email address

        // Content
        $mail->isHTML(true);                        // Set email format to HTML
        $mail->Subject = 'New Query from ' . $name;

        // Body in Table Format
        $mail->Body    = "
            <h2>New Inquiry Details</h2>
            <table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
                <tr>
                    <th style='background-color: #f2f2f2; text-align: left;'>Field</th>
                    <th style='background-color: #f2f2f2; text-align: left;'>Details</th>
                </tr>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{$name}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{$email}</td>
                </tr>
                <tr>
                    <td><strong>Stones Interested:</strong></td>
                    <td>{$stones}</td>
                </tr>
                <tr>
                    <td><strong>Phone:</strong></td>
                    <td>{$phone}</td>
                </tr>
                <tr>
                    <td><strong>Message:</strong></td>
                    <td>{$message}</td>
                </tr>
            </table>
        ";

        // Plain text version of the email (for non-HTML email clients)
        $mail->AltBody = "Name: {$name}\nEmail: {$email}\nStones: {$stones}\nPhone: {$phone}\nMessage: {$message}";

        // Send the email
        if ($mail->send()) {
            // If the email is sent successfully, redirect to a success page
            header('Location: success.php');
            exit(); // Always call exit after a header redirect to stop further script execution
        }
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
