 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Datum"]. " - Name: " . $row["Naam"]. " " . $row["Afspraak"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

$file = fopen("afspraken.csv", "r");
echo "<html>";
echo "<link rel=stylesheet type=text/css href=style.css />";
while (!feof($file) ) {

$rij = fgetcsv($file, 1028);


}
fclose($file);
$conn->close();
?> 