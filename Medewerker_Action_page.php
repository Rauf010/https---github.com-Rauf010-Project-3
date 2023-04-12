<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESRI WEBSITE</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<section class="">
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

  // connectiem maken met de PDO.
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
  if (isset($_POST["knop"])){

    $volledigenaam = $_POST["naam"];
    $straatnaam = $_POST["straatnaam"];
    $klachtdatum = $_POST["klachtdatum"];
    $contactmanier = $_POST["contactmanier"];
    $huisnummer = $_POST["huisnummer"];
    $medewerker = $_POST["medewerker"];
    $probleem = $_POST["probleem"];
    $Onderwerp = $_POST["Onderwerp"];
    // INSERT INTO `esri winkel` (`idmedewerkerklachten`, `volledigenaam`, `straatnaam`, `huisnummer`, `klachtdatum`, `contactmanier`, `medewerker`, `probleem`, `oplossing`) VALUES ('', 'naam', 'straat', 'huis', '2023-03-02', 'online', 'DYlan', 'bla', 'asdasda');
    $queryupdate = $conn->prepare("INSERT INTO medewerkerklachten (idmedewerkerklachten, klachtdatum, volledigenaam, medewerker, straatnaam, huisnummer, contactmanier, probleem, Onderwerp) VALUES ('NULL', '$klachtdatum', '$volledigenaam', 'asd', 'agw', 'ajsjd', 'whds', 'usdw', 'jsudw')");
    $queryupdate->execute();
  }   

  if (isset($_POST["knop"])){
    $volledigenaam = $_POST["naam"];
    $straatnaam = $_POST["straatnaam"];
    $klachtdatum = $_POST["klachtdatum"];
    $contactmanier = $_POST["contactmanier"];
    $huisnummer = $_POST["huisnummer"];
    $medewerker = $_POST["medewerker"];
    $probleem = $_POST["probleem"];
    $Onderwerp = $_POST["Onderwerp"];
  }

    echo "naam: ", $volledigenaam, "<br>";
    echo "Straat: ",  $straatnaam, "<br>";
    echo "Datum: ",  $klachtdatum, "<br>";
    echo "Contact: ", $contactmanier, "<br>";
    echo "Huisnummer: ",  $huisnummer, "<br>";
    echo "Medewerker: ",  $medewerker, "<br>";
    echo "Probleem: ",  $probleem, "<br>";
    echo "Onderwerp: ",  $Onderwerp, "<br>";

   
?>
<br><br>
<h1>Uw gegeven zijn opgeslagen! <br>
We zullen zo spoeding mogelijk dit in behandeling brengen</h1>

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
</body>
</html>


