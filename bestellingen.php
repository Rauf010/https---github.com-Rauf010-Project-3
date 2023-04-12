<!-- This is an overview of all order, only accessible to admins -->
<!DOCTYPE html>
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


<!-- Main HTML code -->
<main id="bestellingen_main">
<div class="bestelling_main_h1">
    <h1 id="bestelling_h1">Alle gemaakte bestellingen:</h1>
</div>

<!-- Main PHP code -->
<?php
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=esri", "root", "");
        return $db;
    }
    catch (PDOException $e) {
        die("ERROR: " . $e->GetMessage());
    }

}

function getdata($db) {
    $queryread = $db->prepare("SELECT bestellingen.idbestelling AS 'Bestelling ID', klanten.voornaam AS 'Voornaam', klanten.achternaam, producten.productnaam, bestellingen.datum, bestellingen.datum FROM bestellingen_has_producten INNER JOIN bestellingen ON bestellingen.idbestelling = bestellingen_has_producten.bestellingen_idbestelling INNER JOIN producten ON producten.idproduct = bestellingen_has_producten.producten_idproduct INNER JOIN klanten ON klanten.idklant = bestellingen.klanten_idklant");
    $queryread->execute();
    $result = $queryread->fetchALL(PDO::FETCH_ASSOC);
    printtable($result);
}

function printtable($result) {
    $table = "<div class='bestelling_table_container'><table class='bestelling_table'>";

    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach ($headers as $header) {
        $table .= "<th>" . $header . "</th>";
    }
    $table .= "</tr>";

    foreach ($result as $data) {
        $table .= "<tr>";
        foreach ($data as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        $table .= "</tr>";
    }

    $table .= "</table></div><br>";
    echo $table;
}





$db = connectdb();
getdata($db);

?>

</main>
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