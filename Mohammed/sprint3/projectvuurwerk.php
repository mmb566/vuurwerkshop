

<!DOCTYPE html>

<html>
<head>
<div>

   




<body background= "http://4.bp.blogspot.com/-7NwKjSn3ywg/UKIQ-e8u9EI/AAAAAAAAI2k/gGPApmBEiD8/s1600/foto-van-een-gigantisch-groot-vuurwerk-spektakel-hd-vuurwerk-wallpaper.jpg">
<title>Vuurwerkshop</title>

<link rel="stylesheet" href="vuurwerk.css">

       <div class="navbar-right">
                    <form class="navbar-form" method="get" action="/zoeken">
                        <input type="text" class="search-query" placeholder=Zoeken name="query" value="">
                    
				</form>
</head>

<body>

    <a href="Winkelwagen afrekenen/Winkelaf.html"> <img class="winkelw" src="http://cdn.onlinewebfonts.com/svg/img_208967.png" alt="Forest" style="width:70px"></a>


<h4><p>- The Tcr Developers - </p></h4>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Home 
    </button>
    <div class="dropdown-content">
      <a href="projectvuurwerk.php">Home</a>
      <a href="vuurwerk1.php">Knalvuurwerk</a>
      <a href="vuurwerk2.php">Siervuurwerk</a>
      <a href="vuurwerk3.php">Hele assortiment</a>
    </div>
  </div> 
</div>





<center><h2 class="Knalvuurwerk">Koop hier je vuurwerk</h2></center>


<?php include "db.php"; ?> 




center><h2 class="Gallerij">

<div class="gallerij">
						<h2 class="slide">Gallerij</h2>
						  	<img class="photo" width="500" src="https://inspiratie.intratuin.nl/wp-content/uploads/2017/09/intratuin-vuurwerk_header-1024x500.jpg">
						  	<img class="photo" width="500" src="https://www.meerbode.nl/wp-content/uploads/2018/09/AA8I8400-640x360.jpeg">
						  	<img class="photo" width="500" src="https://partyflock.nl/ov/images/news/33656_1024x576_491058/Verbod-op-vuurwerk-op-kermissen-en-dancefeesten-extreem-overdreven.png">
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


	
	


