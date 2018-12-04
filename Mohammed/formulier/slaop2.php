<?php

$datum = $afspraak  = $tijd = $adres = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $datum = test_input($_POST["datum"]);
  $afspraak = test_input($_POST["afspraak"]);
  $tijd = test_input($_POST["tijd"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if (strlen($datum) != 0) {
  $openen = fopen("Afspraken.csv", "a");
  $txt = $datum. "," .$afspraak. "," .$tijd. "," .$adres."\n";
  fwrite($openen, $txt);
  fclose($openen);

}

header("location: test2.php");

?>