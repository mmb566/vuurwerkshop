<!DOCTYPE HTML>
<html>

<head>
  <title>Afsprakenlijst</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
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
          <li class="selected"><a href="page.php">Afspraak maken</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        
     
      </div>
      <div id="content">
        <!-- insert the page content here -->
		<h1>Maak je afspraak</h1>
     <form action="mysql.php" method="post">
<p>Datum:
<input type="text"  name="datum" pattern=".{2,}" title="Minimaal 2 tekens" placeholder="Vul in...."  required/>*</p>

<p>Afspraak:
<input type="text" name="afspraak" onClick="this.value=''" value="Vul in...." required />*</p>

<p>Adres:
<input type="text" name="adres" onClick="this.value=''" value="Vul in...." required />*</p>

<p>
<input type="submit" value="Verzenden">
</p>

</form>
   
     </div>
    </div>
    <div id="footer">
    </div>
  </div>
  <div>
  </div>
  <?php include "mysql.php"; ?>
  
</body>
</html>
