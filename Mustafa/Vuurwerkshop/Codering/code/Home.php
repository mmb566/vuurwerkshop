<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
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

<div class="welkm">
	<h1 class="welkom">Welkom</h1>
	<h1 class="h1">Koop hier veilig u vuurwerk producten en ook voor goedkoop</h1>
</div>
	  
<br>

<div class="aanbied">
	<h1 class="red">aanbiedingen</h1>
		<div class="pro1">
			<h3 class="bazo">Bazooka</h3>
			<a href="Knalvuurwerk.php"><img class="baz" src="https://www.vuurwerkbieb.nl/files/7714/0646/8568/bazooka.png"></a>
			<p class="bazo">Van: 5,99</p><p class="bazo">Voor: 3,99</p>
		</div>
<br>
		<div class="pro2">
			<h3 class="star">Star Festival</h3>
			<a href="Siervuurwerk.php"><img class="festi" src="https://anypos-sbo.o.auroraobjects.eu/2/article/1449.1440746214.png"></a>
			<p class="star">Van: 22,50</p><p class="star">Voor: 18,00</p>
		</div>
<br>
		<div class="pro3">
			<h3 class="dynami">Dynamite</h3>
			<a href="Knalvuurwerk.php"><img class="dyna" src="https://anypos-sbo.o.auroraobjects.eu/2/article/4312.1475587707.png"></a>
			<p class="dynami">Van: 3,49</p><p class="dynami">Voor: 2,00</p>
		</div>
</div>

<br>

					<div class="gallerij">
						<h2 class="slide">Gallerij</h2>
						  	<img class="photo" src="http://www.pyromax.nl/wp-content/uploads/2018/11/vuurwerkshow_6.jpg">
							<img class="photo" src="https://media.nu.nl/m/44lxfx9a7xcc_wd1280.jpg/sydney-viert-nieuwe-jaar-met-vuurwerkshow">
							<img class="photo" src="https://media.nu.nl/m/qpyxtsualfxl_wd1280.jpg/inwoners-hong-kong-starten-het-nieuwe-jaar-met-vuurwerkshow">
							<img class="photo" src="https://www.maxvandaag.nl/wp-content/uploads/2017/12/Vuurwerkshows_ANP_1100_400.jpg">
								<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
								<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
					</div>

					<script>
					var slideIndex = 1;
					showDivs(slideIndex);

					function plusDivs(n) {
					    showDivs(slideIndex += n);
					}

					function showDivs(n) {
					    var i;
					    var x = document.getElementsByClassName("photo");
					    if (n > x.length) {slideIndex = 1} 
					    if (n < 1) {slideIndex = x.length} ;
					    for (i = 0; i < x.length; i++) {
					        x[i].style.display = "none"; 
					    }
					    x[slideIndex-1].style.display = "block"; 
					}
					</script>
<br>

<div class="footer">
	<footer>
	  <p class="p">Gemaakt doot: Mustafa Bolat</p>
	  <p class="p">Telefoonnummer: <a href="tel:0612345678">
	  0612345678</a></p>

	  <p class="p">Mail: <a href="mailto:thetcrdevelopers@hotmail.com">
	  thetcrdevelopers@hotmail.com</a></p>
	</footer>
</div>

</body>
</html>