<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $message = htmlentities($_POST['message']);

       // set here
       $subject = "Contact Form";
       $to = 'eric@insidervisit.com';

       $body = <<<HTML
<p><strong>Message</strong></p>
$email<br>
<p><strong>Name</strong></p>
$name<br>
<p><strong>Email</strong></p>
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       $mail_status = mail($to, $subject, $body, $headers);


    if ($mail_status) { ?>
        <script language="javascript" type="text/javascript">
            alert('Your email has been sent. We will get back to you shortly!');
            window.location = 'index.html';
        </script>
    <?php
    }
    else { ?>
        <script language="javascript" type="text/javascript">
            alert('Something went wrong! Please try again.');
            window.location = 'index.html';
        </script>
    <?php
    }

?>