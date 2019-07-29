<?php
// if(isset($_POST['submit'])){
//     $to = "lorenzadamour@gmail.com"; // this is your Email address
//     $from = $_POST['email']; // this is the sender's Email address
//     $nom = $_POST['nom'];
//     $prenom = $_POST['prenom'];
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $nom . " " . $prenom . " wrote the following:" . "\n\n" . $_POST['message'];
//     $message2 = "Here is a copy of your message " . $nom . "\n\n" . $_POST['message'];
//
//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     mail($to,$subject,$message,$headers);
//     mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//     echo "Mail Sent. Thank you " . $nom . ", we will contact you shortly.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     }

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
//
// // Load Composer's autoloader
// require 'vendor/autoload.php';
//
// // Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer(true);
//
// try {
//     //Server settings
//     $mail->SMTPDebug = 2;                                       // Enable verbose debug output
//     $mail->isSMTP();                                            // Set mailer to use SMTP
//     $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'lorenzadamour@gmail.com';                     // SMTP username
//     $mail->Password   = 'zaza02031995';                               // SMTP password
//     $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
//     $mail->Port       = 465;                                    // TCP port to connect to
//
//     //Recipients
//     $mail->setFrom('lorenzadamour@gmail.com', 'Lorenza Damour');     // Add a recipient
//     $mail->addAddress('lorenzadamour@gmail.com');
//
//     // Attachments
//   // Optional name
//
//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

  $to      = 'lorenzadamour@gmail.com';
 $subject = 'le sujet';
 $message = 'Bonjour !';
 $headers = 'From: webmaster@example.com' . "\r\n" .
 'Reply-To: webmaster@example.com' . "\r\n" .
 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
