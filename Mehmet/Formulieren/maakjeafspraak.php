<?php
// Resultaat ophalen uit het formulier.
$naam = $_POST["naam"];
$email = $_POST["email"];
$geslacht = $_POST["geslacht"];
$leeftijd = $_POST["leeftijd"];

// Waarde op het scherm schrijven..
echo "<b>naam:</b>$naam</br>";
echo "<b>email:</b>$email</br>";
echo "<b>geslacht: </b>$geslacht</br>";
echo "<b>leeftijd: </b>$leeftijd</br>";
?>