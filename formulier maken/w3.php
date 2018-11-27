<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Create connectection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connectection
if ($connect->connectect_error) {
    die("connectection failed: " . $connect->connectect_error);
} 

$sql = "SELECT datum, naam, afspraak FROM afspraak";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> datum: ". $row["datum"]. " - naam: ". $row["naam"]. " " . $row["afspraak"] . "<br>";
    }
} else {
    echo "0 results";
}

$connect->close();
?> 