<?php

if (isset(§_Post['submit'])) {
    $name = $_Post['name'];
    $subject = $_Post['subject'];
    $mailFrom = $_Post['mail'];
    $message = $_Post['message'];

    $mailTo = "l.priller@web.de";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an E-Mail from ".$name.".\n\n",$message;

    mail($mailTo, $Subject, $txt, $headers);
    header("Location: index.html?mailsend");
}