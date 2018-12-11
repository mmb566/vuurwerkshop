<html>
<head>
  <div class="test">

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "data");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM knal ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>naam</th>";
				echo "<th>prijs</th>";
                echo "<th>url</th>";
				echo "<th>categorie</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>"; 
                echo "<td>" . $row['naam'] . "</td>";
                echo "<td>" . $row['prijs'] . "</td>";
                echo "<td>" . $row['categorie'] . "</td>";
				echo "<td>" . $row['url'] . "</td>";
				echo "<td><img class='superkanonslag' src=".$row['url']."></td>";
				echo "</tr>";
				echo "</div>";
        }
        echo "</table>";
		
		
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
?>
 </div>
</head>
</html>