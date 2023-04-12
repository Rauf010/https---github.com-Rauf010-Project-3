

<!-- codes voor website klacht pagina -->
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


<!-- Main code -->
<main>
    <h1>Ingevulde klacht:</h1>
</main>

<!-- product complaint action page php code -->

<?php
// Rauf's Code:


function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        return $db;
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function printtable() {
    echo "<table id='productklacht_action'>";
    echo "<tr><td>Voornaam: </td><td>" . $_POST["f_name"] . "</td></tr>";
    echo "<tr><td>Achternaam: </td><td>" . $_POST["l_name"] . "</td></tr>";
    echo "<tr><td>Telefoonnummer: </td><td>" . $_POST["phone"] . "</td></tr>";
    echo "<tr><td>Email: </td><td>" . $_POST["email"] . "</td></tr>";
    echo "<tr><td>Gender: </td><td>" . $_POST["gender"] . "</td></tr><";
    echo "<tr><td>Product: </td><td>" . $_POST["product_naam"] . "</td></tr>";
    echo "<tr><td>Het probleem: </td><td>" . $_POST["klacht_beschrijving"] . "</td></tr>";
    echo "<tr><td>De oplossing: </td><td>" . $_POST["klacht_oplossing"] . "</td></tr>";
    echo "</table><br>";
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esri";


// Connectie maken met de PDO.
$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


try {
    // INSERT query uitvoeren.
    $stmt = $connection->prepare("INSERT INTO websiteklachten (Voornaam, l_name, Wtelefoon, WAdress, WPostcode,
    WGeslacht, W_Klacht, WKlacht_fix, WKlacht_submit)
    VALUES (:naam_achternaam, :telefoonnummer, :onderwerp, :bericht, :datum) ");
    $stmt->bindParam(':Voornaam', $voornaam);
    $stmt->bindParam(':Wtelefoon', $telefoonnummer);
    $stmt->bindParam(':WAdress', $adress);
    $stmt->bindParam(':WPostcode', $postcode);
    $stmt->bindParam(':WGeslacht', $geslacht);
    $stmt->bindParam(':W_Klacht', $klacht);
    $stmt->bindParam(':WKlacht_fix', $klacht_fix);

    
    // INSERT rij.
    if (isset($_REQUEST['volledigenaam']) ) {
        $voornaam = $_POST['volledigenaam'];
        $telefoonnummer= $_POST['telefoon'];
        $adress = $_POST['bericht'];
        $postcode = $POST['postcode'];
        $geslacht = $POST['gender'];
        $klacht = $POST['probleem'];
        $klacht_fix = $POST['oplossing'];
        $stmt->execute();

        header('Location: Websiteklachtaction.php');

    }
}


catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$sql_select = "SELECT * FROM websiteklachten";
$data = $connection->query($sql_select);


$connection = null;




// Delete functies.


if (isset($_GET['id']) ) {
    $id = $_GET['id'];
    echo "$id";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        // Set the PDO error mode to exception.
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL to delete a record.
        $sql = "DELETE FROM websiteklachten WHERE id = '$id'";

        // Use exec() because no results are returned.
        $connection->exec($sql);
        echo "Record deleted successfully";
        
        // Terugsturen naar de hoofdpagina.
        header('Location: Websiteklachtaction.php');
    }

    catch(PDOException $e) {
        // echo $sql . "<br>" . $e->getMessage();
    }
}

$connection = null;


?>

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