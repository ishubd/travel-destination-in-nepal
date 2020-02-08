<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $mailTo = "example@example.com";
    $headers = "From: ".$name;
    $txt = "You have received a suggestion by ".$name."from ".$country.".\n\n".$message;

    mail(mailTo, $country, $txt, $headers);
    header(Location: index.html?mailsend);
}

?>