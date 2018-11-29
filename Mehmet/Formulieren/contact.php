<!DOCTYPE HTML>
<html>

<head>
  <title>Afsprakenlijst</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/php; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Afspraken<span class="logo_colour">Lijst</span></a></h1>
          <h2>Naam: Mustafa Bolat</h2>
		  <h2>Titel: Project</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="examples.php">Afspraken</a></li>
          <li><a href="page.php">Afspraak maken</a></li>
          <li class="selected"><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
  
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Neem contact op</h1>
       <form action="maakjeafspraak.php" method="post">
<p>Naam:
<input type="text"  name="naam" pattern=".{3,}" title="Minimaal 3 tekens" placeholder="Vul uw naam in.."  required/>*</p>

<p>E-mail:
<input type="email" name="email" onClick="this.value=''" value="Vul uw emailadres in...." required />*</p>

<p>Geslacht:</p> 
<input type="radio" name="geslacht" id="geslacht" value="man"> man</br> 
<input type="radio" name="geslacht" id="geslacht"  value="vrouw" checked> vrouw</br> 
<input type="radio" name="geslacht" id="geslacht"  value="pass"> pass</br></br> 

<p>Leeftijd:</p> 
<input type="radio" name="leeftijd" id="leeftijd" value="tussen de 10 en 15"> tussen de 10 en 15</br> 
<input type="radio" name="leeftijd" id="leeftijd"  value="tussen de 20 en 30" checked> tussen de 20 en 30</br> 
<input type="radio" name="leeftijd" id="leeftijd"  value="30+"> 30+</br></br>

<p>
<input type="submit" value="Verzenden">
</p>

</form>
      </div>
    </div>
    <div id="footer">
    </div>
  </div>
</body>
</html>
