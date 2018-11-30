

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sprintt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Datum, Naam, Afspraak FROM afspraken";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Datum: " . $row["Datum"]. " - Naam: " . $row["Naam"]. " " . $row["Afspraak"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>