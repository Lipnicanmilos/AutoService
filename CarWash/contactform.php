<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTO = "ememcarwash@gmail.com";
    $headers = "From: eMeMcarWash.sk";
    $txt = "Odosielateľ: ".$name."\nKontakt: ".$mailFrom."\n\nSpráva: \n".$message;

    mail($mailTO, $mailFrom, $txt, $headers);
    header("Location: index.html?mailsend");
}
?> 
