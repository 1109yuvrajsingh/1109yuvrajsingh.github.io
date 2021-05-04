<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $email_from = 'yuvrajomc@gmail.com';

    $email_subject = 'New Visitor Connect';

    $email_body = "User Name: $name.\n".
                        "User E-mail: $visitor_email.\n".
                            "Subject: $subject.\n".
                                "Message: $message.\n";
    

    $to = "jagquar2000@gmail.com";

    $headers = "From: $email_from \r \n";

    $headers = "Reply-To: $visitor_email \r \n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");