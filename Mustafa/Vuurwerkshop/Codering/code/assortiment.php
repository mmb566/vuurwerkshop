<?php include 'db_vuurwerk.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>assortiment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="https://www.rijnhoven.nl/files/vuurwerk.jpg">

<div class="shoppingcar">
	<a class="car" href="checkout.php"><img class="car" src="http://i66.tinypic.com/2ir3v5t.png"></a>
</div>

	<div class="header">
		<h2>The Tcr Developers</h2>
	</div>

<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
  	<a href="Home.php">Home</a>
    <a href="Knalvuurwerk.php">Knalvuurwerk</a>
    <a href="Siervuurwerk.php">Siervuurwerk</a>
    <a href="assortiment.php">assortiment</a>
  </div>
</div>


<br>

<div class="assor">
	<h1 class="heleassor">Hele assortiment</h1>
</div>

<br>

<div class="rij">
	<?php
		include 'db_assortiment.php';
	?>
</div>



</body>
</html>