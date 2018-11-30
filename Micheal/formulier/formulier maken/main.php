<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" type="text/css" href="sty.css" />
  <meta charset="utf-8">
</head>
<body>  

<div>
    <nav>
      <button><a href="test.php">Voorpagina</a></button>
      <button><a href="contact.php">Contact ons</a></button>
    </nav>
</div>

<div class="hoofd">
  <h2>Mohammed</h2>
  <h2><?php include'bestand.php'; ?></h2>
</div>

<div>
  <?php include 'tabel.php';?>  
</div>


<div class="form">
    <h2>Voeg je afspraak toe</h2>
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
<div>
    <?php include "db_afspraak.php"; ?>



</div>


</body>
</html>