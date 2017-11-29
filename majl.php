<?php
$email = $_POST['primatelj'];
$naslov = $_POST['naslov'];
$tekst = $_POST['tekst'];
echo "Primatelj: $email<br>";
echo "Naslov: $naslov<br>";
echo "Tekst: $tekst<br>";
ini_set("SMTP","smtp.gmail.com");
ini_set("sendmail_from","tevelly@gmail.com");
if(mail($email,$naslov,$tekst))
{
    echo "Poruka je uspješno poslana";
}
else
{
    echo "Poruka nije uspješno poslana";
}