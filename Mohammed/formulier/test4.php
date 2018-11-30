<!DOCTYPE HTML>  
<html>
<head>
 <link rel="stylesheet" type="text/css" href="stylee.css" />
  <meta charset="utf-8">
 
</head>
<body>  

<div>
    <nav>
      <button><a href="test4.php">Home</a></button>
      <button><a href="contact2.php">Contact</a></button>
    </nav>
</div>



<div class="form">
    <h2>Afspraak toevoegen</h2>
    <form method="post" action="sprint.php">  
      Datum: <input type="text" name="datum" id="datum">
      <br><br>
      
      Naam: <input type="text" name="afspraak" id="naam">
      <br><br>
      Afspraak: <input type="text" name="tijd" id="afspraak">
      <br><br>
     
      <input type="submit" ="submit" name="Invoeren" value="Invoeren">
  
    </form>
</div>

<div>
  <?php include 'tabel2.php';?>  
</div>




<br>
<br>
<br>

<?php include "sprint.php"; ?>


</body>
</html>