<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
</head>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>

<div>
    <nav>
      <button><a href="test4.php">Home</a></button>
      <button><a href="contact2.php">Contact</a></button>
    </nav>
</div>

<div class="contact">
	<h2>Vul uw gegevens:</h2>
		<form action="resultaat2.php" method="post">
			<p>Naam:
			<input type="text"  name="naam" pattern=".{2,}" title="Minimaal 2 tekens" placeholder="Geef uw naam"  required/>*</p>

			<p>E-mail:
			<input type="email" name="email" onClick="this.value=''" value="Vul in" required />*</p>

			<p>Heeft u nog opmerkingen?</p>
			<p><textarea rows="5" cols="50" id="opmerkingen" name="opmerkingen" placeholder="opmerkingen.">
			</textarea></p>

			<p>geslacht:</p>
			  <input type="radio" name="gender" value="man" checked>man<br>
  			  <input type="radio" name="gender" value="vrouw">vrouw<br>

  			  <p>bent u een robot?</p>
			  <input type="radio" name="robot" value="nee" checked>nee<br>
  			  <input type="radio" name="robot" value="ja">ja<br>


			<p>
			<input type="submit" value="Verzenden"></br></br>
			<input type="reset" value="Reset:"></br></br>
			</p>
		</form>
</div>

<div class="a">
	<h1>Contact</h1>
		<a class="link1" href="mailto:mustimmb566@gmail.com" target="_top">Stuur een mail naar ons.</a>
<br>
		<a class="link2" href="tel:+612345678" target="_top">Bel ons.</a>
</div>

</body>
</html>