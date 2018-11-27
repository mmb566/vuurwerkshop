<?php

$file = fopen("afspraken.csv", "r");
echo "<html>";
echo "<link rel=stylesheet type=text/css href=style.css />";
echo "<table>";
while (!feof($file) ) {

$rij = fgetcsv($file, 1028);


 	echo "<tr>";
 	echo "<td> $rij[0] </td>";
 	echo "<td> $rij[1] </td>";
 	echo "<td> $rij[2] </td>";
 	echo "</tr>";

}
	 echo "</table>";
	 echo "</html>";


fclose($file);
?>		