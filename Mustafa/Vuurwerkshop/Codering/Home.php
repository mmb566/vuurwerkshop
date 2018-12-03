<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="sty.css">
	<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
</head>
<body background="https://www.rijnhoven.nl/files/vuurwerk.jpg">

<div class="shoppingcar">
	<a class="car" href=""><img class="car" src="http://i66.tinypic.com/2ir3v5t.png"></a>
</div>

	<div class="header">
		<h2>The Tcr Developers</h2>
	</div>

<div class="navigatie">
	<nav>
 		<a href="Home.php" class="nav">Home</a>
    	<a href="Knalvuurwerk.php" class="nav">Knalvuurwerk</a>
    	<a href="Siervuurwerk.php" class="nav">Siervuurwerk</a>
    	<a href="assortiment.php" class="nav">Hele assortiment</a>
    	<a href="Contact.php" class="nav">Contact</a>
	</nav>
		<div class="topnav">
			<input type="text" class="Search" placeholder="Search..">
		</div>
</div>

<br>
<div class="welkm">
	<h1 class="welkom">Welkom</h1>
	<h1 class="h1">Koop hier veilig u vuurwerk producten en ook voor goedkoop</h1>
</div>
	  
<br>

<div class="aanbiedingen">
	<h1 class="aanbiedingen">AANBIEDINGEN</h1>
</div>



					<div class="gallerij">
						<h2 class="slide">Gallerij</h2>
						  	<img class="photo" width="300" src="https://inspiratie.intratuin.nl/wp-content/uploads/2017/09/intratuin-vuurwerk_header-1024x500.jpg">
						  	<img class="photo" width="300" src="https://www.meerbode.nl/wp-content/uploads/2018/09/AA8I8400-640x360.jpeg">
						  	<img class="photo" width="300" src="https://partyflock.nl/ov/images/news/33656_1024x576_491058/Verbod-op-vuurwerk-op-kermissen-en-dancefeesten-extreem-overdreven.png">
					</div>

					<script>
					var myIndex = 0;
					carousel();

					function carousel() {
					    var i;
					    var x = document.getElementsByClassName("photo");
					    for (i = 0; i < x.length; i++) {
					       x[i].style.display = "none";  
					    }
					    myIndex++;
					    if (myIndex > x.length) {myIndex = 1}    
					    x[myIndex-1].style.display = "block";  
					    setTimeout(carousel, 4000); // Change image every 2 seconds
					}
					</script>



</body>
</html>