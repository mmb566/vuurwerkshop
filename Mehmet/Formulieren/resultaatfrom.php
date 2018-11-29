<?php
// Resultaat ophalen uit het formulier.

$datum = $_POST["datum"];
$afspraak = $_POST["afspraak"];
$adres = $_POST["adres"];

// Waarde op het scherm schrijven..
echo "<b>datum:</b>$datum</br>";
echo "<b>afspraak:</b>$afspraak</br>";
echo "<b>adres: </b>$adres</br>";

$file= fopen("project.csv", "a");
$tekst= $datum."," .$afspraak.",". $adres."\n";
fwrite($file, $tekst);
fclose ($file);
?>