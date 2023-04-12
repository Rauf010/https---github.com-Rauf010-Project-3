<!-- This is the country overview with every country of origin -->
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
<!-- Main html code -->
<main id='landenoverzicht_main'>
    <div id='landenoverzicht_h1'>
    <h1>Landen van herkomst van onze leveranciers</h1>
    </div>

<br><br><br>
<!-- Main PHP code -->
<?php

// Functions
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=esri", "root", "");
        // echo "Connection succesful!";
        queryread($db);
        return $db;
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function queryread($db) {
    $read = $db->prepare("SELECT landen.idland, landen.landnaam, landen.afkortingnaam , leveranciers.leveranciernaam FROM landen INNER JOIN leveranciers ON leveranciers.landen_idland = landen.idland ORDER BY `landen`.`idland` ASC");
    $read->execute();
    queryprint($read);
    return $read;
}

function queryprint($read) {
    echo "<div class='landentable_container'><table id='landentable_body'>";
    echo "<th>Land ID</th><th>Landnaam</th><th>Afkorting</th><th>Leveranciers</th>";
    foreach ($read as $data) {
        echo "<tr>";
        echo "<td>" . $data['idland'] . "</td>";
        echo "<td>" . $data['landnaam'] . "</td>";
        echo "<td>" . $data['afkortingnaam'] . "</td>";
        echo "<td>" . $data['leveranciernaam'] . "</td>";
        echo "</tr>";
    }
    echo "</table></div>";
}

// Executing functions
$db = connectdb();

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