<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = $_POST['email'];

    $email_subject = "New Form Subbmition";

    $email_body = "User Name:  $name./n".
                    "User Email:  $visitor_email./n".
                        "Subject:   $visitor_subject./n".
                            "Message: $message./n";

    $to = "baharaysel@gmail.com";

    $header= "From: $email_from \r\n";

    $header= "reply-to: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $header);

    header("Location: index.html")

?>