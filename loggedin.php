<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PC4U</title>
	<link rel="stylesheet" href="assets/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600italic,600,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<img src="img/logo.png" class="logo">
	</div>
	<div class="nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="onderdelen.html">Onderdelen</a></li>
			<li><a href="computers.html">Computers</a></li>
			<li><a href="reparatie.html">Reparatie</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="route.html">Route</a></li>
			<li><a href="login.php" class="active">Login</a></li>
		</ul>
	</div>
	<div class="content">
		<?php
			if(isset($_POST['btnLogin'])){
				$username = $_POST['txtUsername'];
				$password = sha1($_POST['txtPassword']);
				if($username != "" && $password != ""){
					echo "<h1>Ingelogd</h1>";
					echo "<p>U ben succesvol ingelogd met de volgende gegevens:</p>";
					echo "<p>Gebruikersnaam: $username<br>";
					echo "Wachtwoord: $password</p>";
				}
				else{
					header("Location: login.php?error=1");
				}
			}
			else{
				header("Location: login.php");
			}
		?>
	</div>
	<div class="openingstijden">
		<h3>Openingstijden</h3>
		<table>
			<tr><td>Maandag</td><td>12:00 - 17:00</td></tr>
			<tr><td>Dinsdag</td><td>9:00 - 17:00</td></tr>
			<tr><td>Woensdag</td><td>9:00 - 17:00</td></tr>
			<tr><td>Donderdag</td><td>9:00 - 17:00</td></tr>
			<tr><td>Vrijdag</td><td>9:00 - 21:00</td></tr>
			<tr><td>Zaterdag</td><td>9:00 - 17:00</td></tr>
			<tr><td>Zondag</td><td>Gesloten</td></tr>
		</table>
	</div>
	<div class="footer">
		<div class="locatie">
			<h4>Locatie</h4>
			<ul>
				<li>Terheijdenseweg 350</li>
				<li>4826 AA Breda</li>
				<li>T 076 573 34 44</li>
				<li>E info@pc4u.ovh</li>
			</ul>
		</div>
		<div class="links">
			<h4>Links</h4>
			<ul>
				<li><a href="overons.html">Over ons</a></li>
				<li><a href="voorwaarden.html">Voorwaarden</a></li>
				<li><a href="sitemap.html">Sitemap</a></li>
			</ul>
		</div>
		<div class="volgons">
			<h4>Volg ons</h4>
			<a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" class="twitter"></a><a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png" class="facebook"></a>
		</div>
	</div>
	<div class="copyright-footer">
		PC4U &copy; 2015
	</div>
	</div>
</body>
</html>
