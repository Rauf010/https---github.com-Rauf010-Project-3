<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
    <header>
            <div class="circle"></div>
            <div class="circles"></div>
            <a href="#" class="logo">ESRI-<span>digitaal</span></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Overons.php">Over Ons</a></li>
                <li><a href="Producten.php">Producten</a></li>
                <li><a href="tabel.php">Voorraad</a></li>
                <li><a href="bestellingen.php">bestellingen</a></li>
            </ul>
         <a href="cart.php"><p>S-cart</p></a>
         
        </header>



        <div class="background_image">
            <img src="image/esri-digitaal.png">
        </div>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esri";

// Connectie maken met de PDO.
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST["knop"])) {
  $volledigenaam = $_POST['naam'];
  $email = $_POST['email'];
  $woonplaats = $_POST['woonplaats'];
  $geboortedatum = $_POST['geboortedatum'];
  $compliment = $_POST['compliment'];
  $uniek = $_POST['uniek'];

  // Prepare the SQL statement
  $query = $conn->prepare("INSERT INTO complimenten (volledigenaam, email, woonplaats, geboortedatum, compliment, uniek) 
   VALUES (:volledigenaam, :email, :woonplaats, :geboortedatum, :compliment, :uniek)");

  // Bind the parameters to the statement
  $query->bindParam(':volledigenaam', $volledigenaam);
  $query->bindParam(':email', $email);
  $query->bindParam(':woonplaats', $woonplaats);
  $query->bindParam(':geboortedatum', $geboortedatum);
  $query->bindParam(':compliment', $compliment);
  $query->bindParam(':uniek', $uniek);
  // Execute the statement
  $query->execute();

  echo "naam: " . $volledigenaam . "<br>";
  echo "email: " . $email . "<br>";
  echo "woonplaats: " . $woonplaats . "<br>";
  echo "geboortedatum: " . $geboortedatum . "<br>";
  echo "compliment: " . $compliment . "<br>";
  echo "uniek: " . $uniek . "<br>";
}

?>
</section>

<footer class="footer">
        <div class="main">
            <div class="row">
                <div class="footer_col">
                    <h4>Ons bedrijf</h4>
                    <ul>
                        <li><a href="ecovriendelijkheid.php">Ecovriendelijkheid</a></li>
                        <li><a href="Medewerkers.php">Onze mederwerkers</a></li>
                        <li><a href="Geschiedenis.php">Geschiedenis</a></li>
                        <li><a href="Doelstelling.php">Doelstelling van het bedrijf</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Overige</h4>
                    <ul>
                        <li><a href="Landenoverzicht.php">landenoverzicht</a></li>
                        <li><a href="Retour policy.php">Leveren/Retourneren?</a></li>
                        <li><a href="Leverancier.php">Leverancier</a></li>
                        <li><a href="tabel.php">Categorie</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Klantenservice</h4>
                    <ul>
                        <li><a href="">Ons vinden?</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                        <li><a href="Klacht.php">Klacht indienen?</a></li>
                        <li><a href="Review.php">Review</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Overige</h4>
                    <div class="social">
                        <a href=""><img src="image/facebook.png"></a> <br>
                        <a href=""><img src="image/Googlell.png"></a> <br>
                        <a href=""><img src="image/twitter.png"></a> <br>
                        <a href=""><img src="image/instagram.png"></a>
                    </div>               
                        
                    
                </div>
            </div>
        </div>
    </footer>