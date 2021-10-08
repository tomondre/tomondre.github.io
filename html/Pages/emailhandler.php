<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    $mailTo = "tomas.ondrejka2000@gmail.com";
    $headers = "From:".$email;
    $txt = "You have received email from".$name.".\n\n".$text;


    mail($mailTo,$name,$txt);
}
