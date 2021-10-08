<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    $mailTo = "304150@via.dk";
    $headers = "From:".$email;
    $txt = "You have received email from".$name.".\n\n".$text;

    mail($mailTo,$name,$txt);
}