<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['contact-name']; // Get Name value from HTML Form
        $email_id =  $_POST['contact-email']; // Get Email Value
        $subject = 'New Message From SolarMelts Contact Form ';
        $msg = $_POST['contact-message']; // Get Message Value
         
        $to = "dinapal1994@gmail.com"; // You can change here your Email
        // $sender = 'SolarMelts Inc';
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
         // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: SolarMelts Inc <info@tagdevs.host>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
         
        if(mail($to, $subject, $message, $headers)) {
            echo '<div class="alert alert-success" role="alert">Thank you. We will contact you shortly.</div>';
        } 
        else{
            echo '<div class="alert alert-danger" role="alert">Error: '. $mail->ErrorInfo.'</div>';
        }
    }
?>

