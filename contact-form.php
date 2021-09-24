<?php

    $name = $_POST['name'];
    $visitor_no = $_POST['number'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "vignneshravindran.com";
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name. \n".
                    "User Number: $visitor_no. \n".
                        "User Email: $visitor_email. \n".
                            "Message: $message. \n";

    $to = "ravin.vignnesh@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply to: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");


?>
