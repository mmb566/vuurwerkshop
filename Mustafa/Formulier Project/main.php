<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style1.css" />
  <meta charset="utf-8">
</head>
<body>  

<div>
    <nav>
      <button><a href="main.php">Home</a></button>
      <button><a href="contact.php">Contact</a></button>
    </nav>
</div>

<div class="hoofd">
  <h2>Mustafa</h2>
  <h2><?php include'bestand.php'; ?></h2>
</div>

<div>
  <?php include 'db_afspraak.php';?>  
</div>


<div class="form">
    <h2>Afspraak toevoegen</h2>
    <form method="post" action="slaop.php">  
      Datum: <input type="text" name="datum" id="datum">
<br><br> 
      Naam: <input type="text" name="afspraak" id="naam">
<br><br>
      Afspraak: <input type="text" name="tijd" id="afspraak">
<br><br>
      <input type="submit" ="submit" name="Invoeren" value="Invoeren">
    </form>
</div>

<br>



</body>
</html>