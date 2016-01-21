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
      <li><a href="index.html" class="active">Home</a></li>
      <li><a href="onderdelen.html">Onderdelen</a></li>
      <li><a href="computers.html">Computers</a></li>
      <li><a href="reparatie.html">Reparatie</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="route.html">Route</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </div>

  <div class="content-register">
    <h1>Register</h1>
    <form class="register-form" method="post" action="reg_suc.php">


      <div class="register-form-left">

        <div class="form-group">
          <label for="voornaam"> Voornaam: </label>
          <br>
          <input name="voornaam" id="voornaam" type="text">
        </div>

        <div class="form-group">
          <label for="achternaam"> Achternaam: </label>
          <br>
          <input name="achternaam" id="achternaam" type="text">
        </div>

        <div class="form-group">
          <label for="adres"> Adres: </label>
          <br>
          <input name="adres" id="adres" type="text">
        </div>

        <div class="form-group">
          <label for="postcode"> Postcode: </label>
          <br>
          <input name="postcode" id="postcode" type="text">
        </div>

        <div class="form-group">
          <label for="voornaam"> Land: </label>
          <br>
          <input name="voornaam" id="voornaam" type="text">
        </div>

        <div class="form-group">
          <label for="provincie"> Provincie: </label>
          <br>
          <input name="provincie" id="provincie" type="text">
        </div>

        <div class="form-group">
          <label for="email"> Email: </label>
          <br>
          <input name="email" id="email" type="email">
        </div>

        <div class="form-group">
          <label for="email"> Bevestig Email: </label>
          <br>
          <input name="email" id="email" type="email">
        </div>

      </div>

      <div class="register-form-right">

        <div class="form-group">
          <label for="gebruikersnaam"> Gebruikersnaam: </label>
          <br>
          <input name="gebruikersnaam" id="gebruikersnaam" type="text">
        </div>

        <div class="form-group">
          <label for="wachtwoord"> Wachtwoord: </label>
          <br>
          <input name="wachtwoord" id="wachtwoord" type="text">
        </div>

        <div class="form-group">
          <label for="bev_wachtwoord"> Bevestig Wachtwoord: </label>
          <br>
          <input name="bev_wachtwoord" id="bev_wachtwoord" type="text">
        </div>

        <div class="form-group">
          <label for="geslacht"> Geslacht: </label>
          <br>
          <div class="radio">
            <input type="radio" name="geslacht" value="man"> Man
            <input type="radio" name="geslacht" value="vrouw"> Vrouw
          </div>
        </div>

        <div class="form-group">
          <label for="nieuwsbrief"> Nieuwsbrief: </label>
          <br>
          <div class="radio">
            <input name="terms" id="terms" type="radio" value="ja"> Ja
            <input name="terms" id="terms" type="radio" value="nee"> Nee
          </div>

        </div>

        <div class="form-group">
          <label for="terms"> Accept Terms and conditions </label>
          <br>
          <div class="radio">
            <input name="terms" id="terms" type="radio" value="ja"> Ja
            <input name="terms" id="terms" type="radio" value="nee"> Nee
          </div>

        </div>

        <div class="form-group">
          <label for=""> Vind u de site mooi? </label>
          <br>
          <div class="radio">
            <input name="mooi" id="mooi" type="radio" value="ja"> Ja
            <input name="mooi" id="mooi" type="radio" value="nee"> Nee
          </div>

        </div>

      </div>

      <input class="btn_reg" type="submit" name="btn_register" value="Regristreer Nu">

    </form>

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
      <a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" class="twitter"></a>
      <a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png" class="facebook"></a>
    </div>
  </div>
  <div class="copyright-footer">
    PC4U &copy; 2015
  </div>
  </div>
</body>

</html>
